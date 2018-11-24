from django.shortcuts import render, get_object_or_404
from contatos.models import ContatoModel
from contatos.forms import AgendaForm


def contato(request):
    if request.method == 'POST':
        form = AgendaForm(request.POST)
        if not form.is_valid():
            if 'search' in request.POST:
                terms = request.POST.get('search', '')
                contexto = {
                    'contatos': ContatoModel.objects.all().filter(nome__contains=terms).order_by('nome'),
                    'form': form,
                }
                return render(request, 'contato.html', contexto)
            else:
                contexto = {
                    'contatos': ContatoModel.objects.all().order_by('nome'),
                    'form': form,
                }
                return render(request, 'contato.html', contexto)
        else:
            ContatoModel.objects.create(**form.cleaned_data)
            contexto = {
                'contatos': ContatoModel.objects.all().order_by('nome'),
                'form': AgendaForm(),
            }
            return render(request, 'contato.html', contexto)
    else:
        contexto = {
            'contatos': ContatoModel.objects.all().order_by('nome'),
            'form': AgendaForm(),
        }
        return render(request, 'contato.html', contexto)

def adicionar_contato(request):
    if request.method == 'POST':
        form = AgendaForm(request.POST)
        if not form.is_valid():
            contexto = {
                'contatos': ContatoModel.objects.all().order_by('nome'),
                'form': form,
            }
            return render(request, 'contato.html', contexto)
        else:
            ContatoModel.objects.create(**form.cleaned_data)
            contexto = {
                'contatos': ContatoModel.objects.all().order_by('nome'),
                'form': AgendaForm(),
            }
            return render(request, 'contato.html', contexto)
    else:
        contexto = {
            'form': AgendaForm(),
        }
        return render(request, 'contato_adicionar.html', contexto)

def editar_contato(request):
    if request.method == 'POST':
        chave = int(request.POST.get('chave', ''))
        obj = get_object_or_404(ContatoModel, pk=chave)
        form = AgendaForm(instance=obj)
        context = {'form': form, 'chave': chave}
        return render(request, "editar.html", context)        
    else:
        return render(request, "contato.html")

def editar_contato_final(request):    
    if request.method == 'POST':
        chave = int(request.POST.get('chave', ''))
        form = AgendaForm(request.POST)
        if not form.is_valid():
            obj = get_object_or_404(ContatoModel, pk=chave)
            form = AgendaForm(instance=obj)
            context = {'form': form, 'chave': chave}
            return render(request, "editar.html", context)
        else:
            chave = int(request.POST.get('chave', ''))
            ContatoModel.objects.filter(pk=chave).update(**form.cleaned_data)
            obj = get_object_or_404(ContatoModel, pk=chave)
            form = AgendaForm(instance=obj)
            context = {'form': form, 'chave': chave}
            return render(request, "editarf.html", context)
    return render(request, "editarf.html", context)

def apagar_contato(request):
    if request.method == 'POST':
        chave = int(request.POST.get('chave', ''))
        ContatoModel.objects.filter(pk=chave).delete()
    return render(request, "contato_apagar.html")
    
def sobre(request):
    return render(request, "sobre.html")