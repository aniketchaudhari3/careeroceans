from souper import *
from job import *

url = 'https://www.indeed.co.in/jobs?'

payload = {"q": "software engineer", "l": "pune"}

soup = Souper(url, payload).get_soup()

jobCards = soup.findAll("div", {"class": "jobsearch-SerpJobCard"})

#indeed scraper class
'''
Components:
title
employer
address
description
sponsored
date-posted
'''

class IndeedScraper():
    j_dataset = []
    
    def get_jobs(self,jobcard):
        # j_id = 0
        # j_employer = ''
        # j_summary = ''
        # j_location = ''
        # j_isTrusted = False
        # j_isSponsored = False
        # j_datePosted = ''
        # j_link = ''
        return None

    def get_title(self,jobcard):
            jobtitle = jobcard.findAll("a",{"class":"jobtitle"})
            turns = jobcard.findAll("a",{"class":"turnstileLink"})
            
            if len(jobtitle) != 0:
                return jobtitle[0].text
            elif len(turns) != 0:
                return turns[0].text
            else:
                return False

    