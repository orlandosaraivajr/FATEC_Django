from django import forms
from django.forms import ModelForm

from contatos.models import ContatoModel


class AgendaForm(ModelForm):
    class Meta:
        model = ContatoModel
        fields = ('nome', 'telefone', 'email', 'endereco') # Campos que serão verificados a validade
        # exclude = ['created_at']
        labels = {
            'nome': 'Nome',
            'telefone': 'Telefone',
            'email': 'E-mail',
            'endereco': 'Endereço',
        }
        widgets = {
            'nome': forms.TextInput(),
            'telefone': forms.TextInput(),
            'email': forms.EmailInput(),
            'endereco': forms.TextInput(),
        }
        error_messages = {
            'nome': {
                'required': ("Digite o nome."),
            },
            'telefone': {
                'required': ("Digite o telefone."),
                'null': ("Não aceito menos de três digitos")
            }
        }

    def clean_nome(self):
        return self.cleaned_data['nome'].title()
        
    def clean_email(self):
        return self.cleaned_data['email']
    def clean_endereco(self):
        return self.cleaned_data['endereco']

    def clean_telefone(self):
        if len(self.cleaned_data['telefone']) > 3:
            return self.cleaned_data['telefone']