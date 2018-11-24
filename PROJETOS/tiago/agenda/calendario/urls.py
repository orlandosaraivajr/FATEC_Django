from django.urls import path

from . import views

app_name = "calendario"
urlpatterns = [
    path('calendario', views.calendario, name='calendario'),
    path('cadastro', views.cadastro, name='cadastro'),
    path('cadastro_sucesso', views.cadastro_sucesso, name='cadastro_sucesso'),
]