from Paymenta import Payments

class card(Payments):
    cvv = int
    dateCard = int
    numberCard = int
    
    def __init__(self, id , cvv, dateCard, numberCard):
        super().__init__(id)
        self.cvv = cvv
        self.dateCard = dateCard
        self.numberCard = numberCard