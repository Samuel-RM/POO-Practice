from car import Car

class UberVan(Car):
    typeCarAccepted = []
    material = []
    
    def __init__(self, license, driver, typeCarAccepted, material):
        super().__init__(license, driver)
        self.typeCarAccepted = typeCarAccepted
        self.material = material