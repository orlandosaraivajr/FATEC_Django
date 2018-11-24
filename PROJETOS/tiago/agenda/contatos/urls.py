from django.urls import path

from . import views

app_name = "contatos"
urlpatterns = [
    path('', views.contato, name='raiz'),
    path('editar', views.editar_contato, name='editar'),
    path('contato_adicionar', views.adicionar_contato, name='contato_adicionar'),
    path('contato_apagar', views.apagar_contato, name='contato_apagar'),
    path('editarf', views.editar_contato_final, name='editarf'),
    path('sobre', views.sobre, name='sobre'),
]