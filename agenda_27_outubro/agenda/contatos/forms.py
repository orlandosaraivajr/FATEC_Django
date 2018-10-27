from django import forms


class AgendaForm(forms.Form):
    nome = forms.CharField(max_length=100)
    telefone = forms.CharField(max_length=20)


'''
from django import forms
from django.forms import ModelForm

from contatos.models import ContatoModel


class AgendaForm(ModelForm):
    class Meta:
        model = ContatoModel
        fields = ('nome', 'telefone')
        # exclude = ['created_at']
        labels = {
            'nome': 'Nome',
            'telefone': 'Telefone',
        }
        widgets = {
            'nome': forms.TextInput(),
            'telefone': forms.TextInput(),
        }
        error_messages = {
            'nome': {
                'required': ("Digite o nome."),
            },
            'telefone': {
                'required': ("Digite o telefone."),
            }
        }
'''
