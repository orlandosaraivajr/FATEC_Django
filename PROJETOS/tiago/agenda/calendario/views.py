from django.shortcuts import render, get_object_or_404
from django.http import HttpResponse
from datetime import datetime

from calendario.models import Anotacoes

def calendario(request):
    if request.method == "POST":
        chave = int(request.POST.get('chave', ''))
        Anotacoes.objects.filter(pk=chave).delete()

    anotacoes = Anotacoes.objects.filter(data__month = str(datetime.now().month), data__day = str(datetime.now().day))
    todosfuturos = Anotacoes.objects.filter(data__gt = datetime.today()).order_by('data')
    
    contexto = {'anotacoes':anotacoes, 'todosfuturos':todosfuturos}
    return render(request, 'calendario.html', contexto)
    

def cadastro(request):
    return render(request, 'cadastro.html')

def cadastro_sucesso(request):
    if request.method == "POST":
        nome = request.POST.get('nome', '')
        motivo = request.POST.get('motivo', '')
        
        ano = int(request.POST.get('data', '').split('-')[0])
        mes = int(request.POST.get('data', '').split('-')[1])
        dia = int(request.POST.get('data', '').split('-')[2])
        data = datetime(ano, mes, dia)

        f1 = Anotacoes(nome = nome, motivo = motivo, data = data)
        f1.save()
    return render(request, 'cadastro_sucesso.html')