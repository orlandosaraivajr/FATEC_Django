from django.contrib import admin
from django.urls import path, include

urlpatterns = [
    path('admin/', admin.site.urls),
    path('', include('contatos.urls', namespace='contatos')),
    path('', include('calendario.urls', namespace='calendario')),
]