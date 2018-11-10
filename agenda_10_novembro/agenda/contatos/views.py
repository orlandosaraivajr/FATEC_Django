from django.shortcuts import render, get_object_or_404
from contatos.models import ContatoModel
from contatos.forms import AgendaForm


def contato(request):
    if request.method == 'POST':
        form = AgendaForm(request.POST)
        if not form.is_valid():
            contexto = {
                'contatos': ContatoModel.objects.all(),
                'form': form,
            }
            return render(request, 'contato.html', contexto)
        else:
            ContatoModel.objects.create(**form.cleaned_data)
            contexto = {
                'contatos': ContatoModel.objects.all(),
            }
            return render(request, 'contato.html', contexto)
    else:
        contexto = {
            'contatos': ContatoModel.objects.all()
        }
        return render(request, 'contato.html', contexto)

def editar(request):
    context = {'form': AgendaForm(),
               'contatos': ContatoModel.objects.all()}
    return render(request, 'listar_editar.html', context)

def editar_contato(request, id):
    if request.method == 'POST':
        form = AgendaForm(request.POST)
        if not form.is_valid():
            erros = ''
            for e in form.errors:
                erros += form.errors[e]
            context = {'form': form}
            print(errors)
        else:
            ContatoModel.objects.filter(pk=id).update(**form.cleaned_data)
            obj = get_object_or_404(ContatoModel, pk=id)
            form = AgendaForm(instance=obj)
            context = {'form': form}
        return render(request, "editar.html", context)
    else:
        obj = get_object_or_404(ContatoModel, pk=id)
        form = AgendaForm(instance=obj)
        context = {'form': form}
        return render(request, "editar.html", context)