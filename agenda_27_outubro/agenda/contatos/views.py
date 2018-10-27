from django.shortcuts import render
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
