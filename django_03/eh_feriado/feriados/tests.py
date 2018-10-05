from django.test import TestCase

class IndexTest(TestCase):
    def setUp(self):
        self.resp = self.client.get('/')

    def test_200_response(self):
        self.assertEqual(200, self.resp.status_code)

    def test_texto_natal(self):
        contexto = {'natal': True}
        self.resp = self.client.get('/', contexto)
        self.assertContains(self.resp, 'natal')

    def test_texto_nao_eh_natal(self):
        contexto = {'natal': False}
        self.resp = self.client.get('/', contexto)
        self.assertContains(self.resp, 'Não')

    def test_template_natal(self):
        self.assertTemplateUsed(self.resp, 'natal.html')

class CarnavalTest(TestCase):
    def setUp(self):
        self.resp = self.client.get('/carnaval')

    def test_200_response(self):
        self.assertEqual(self.resp.status_code, 200)

    def test_texto_carnaval(self):
        self.assertContains(self.resp, 'carnaval')

    def test_texto_carnaval_contexto(self):
        contexto = {'carnaval': True}
        self.resp = self.client.get('/carnaval', contexto)
        self.assertContains(self.resp, 'carnaval')

    def test_texto_nao_eh_carnaval(self):
        contexto = {'carnaval': False}
        self.resp = self.client.get('/carnaval', contexto)
        self.assertContains(self.resp, 'Não')

    def test_template_carnaval(self):
        self.assertTemplateUsed(self.resp, 'carnaval.html')