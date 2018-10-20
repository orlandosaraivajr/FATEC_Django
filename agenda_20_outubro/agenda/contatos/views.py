from django.shortcuts import render
from contatos.models import ContatoModel

def contato(request):
    if request.method == 'POST':
        c = ContatoModel()
        c.nome = request.POST.get('nome','')
        c.telefone = request.POST['telefone']
        c.save()
    contexto = {
        'contatos': ContatoModel.objects.all()
    }
    return render(request, 'contato.html', contexto)
