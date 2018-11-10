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

    def clean_nome(self):
        return self.cleaned_data['nome'].upper()