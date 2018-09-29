from django.shortcuts import render

def natal(request):
    contexto = {'natal':True,
        'carnaval':False}
    return render(request, 'natal.html', contexto)

def carnaval(request):
    return render(request, 'carnaval.html')