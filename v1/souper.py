import requests
from bs4 import BeautifulSoup
class Souper():
    __url = ''
    __res = ''
    __soup = None
    __payload = None

    def get_res(self):
        return self.__res

    def get_url(self):
        return self.__url

    def get_payload(self):
        return self.__payload

    def get_soup(self):
        if len(self.__res) != 0:
            self.__soup = BeautifulSoup(self.__res, 'html.parser')
            return self.__soup
        else:
            return None

    def __init__(self, url, payload=None):
        self.__url = url
        if payload == None:
            self.__res = requests.get(url).text
        else:
            self.__res = requests.get(url, params=payload).text
