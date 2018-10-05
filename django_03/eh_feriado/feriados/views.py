from django.shortcuts import render
import datetime

def natal(request):
    hoje = datetime.datetime.now()
    feriado = False
    if hoje.day == 25 and hoje.month == 12:
        feriado = True
    contexto = {'natal':feriado}
    return render(request, 'natal.html', contexto)

def carnaval(request):
    hoje = datetime.datetime.now()
    if hoje.month == 2:
        for day in list(range(11,14)):
            if day == hoje.day:
                contexto = {'carnaval': True}
                return render(request, 'carnaval.html', contexto)
    contexto = {'carnaval': False}
    return render(request, 'carnaval.html', contexto)