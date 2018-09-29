from django.test import TestCase


class IndexTest(TestCase):
    def setUp(self):
        self.resp = self.client.get('/')

    def test_200_response(self):
        self.assertEqual(200, self.resp.status_code)

    def test_texto(self):
        self.assertContains(self.resp, 'natal')

    def test_template_natal(self):
        self.assertTemplateUsed(self.resp, 'natal.html')

class CarnavalTest(TestCase):
    def setUp(self):
        self.resp = self.client.get('/carnaval')

    def test_200_response(self):
        self.assertEqual(self.resp.status_code, 200)

    def test_texto_carnaval(self):
        self.assertContains(self.resp, 'carnaval')