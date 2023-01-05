from Paymenta import Payments

class paypal(Payments):
    email = str
    
    def __init__(self, id, email):
        super().__init__(id)
        self.email = email