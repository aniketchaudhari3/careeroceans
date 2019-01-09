#job class
class Job():
    title = ''
    employer = ''
    address = ''
    description = ''
    sponsored = False
    dateposted = ''

    def __init__(self,title='',employer='',address='',description='',sponsored=False,dateposted='')
        self.title = title
        self.employer = employer
        self.address = address
        self.description = description
        self.sponsored = sponsored
        self.dateposted = dateposted
    
    def print_job(self):
        print("title: ",self.title)
        print("employer: ",self.employer)
        print("address: ",self.address)
        print("description: ",self.description)
        print("date posted: ",self.dateposted)
        print("-------------------------------")

