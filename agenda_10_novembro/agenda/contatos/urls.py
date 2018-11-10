from django.urls import path

from . import views

urlpatterns = [
    path('', views.contato),
    path('editar/', views.editar, name='listar_editar'),
    path('editar/<int:id>/', views.editar_contato, name='editar'),
]