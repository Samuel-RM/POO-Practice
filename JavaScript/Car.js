// function Car(license, driver){
//     this.id;
//     this.license = license ;
//     this.driver = driver;
//     this.passenger;
// }

// Car.prototype.A = function(){
//     console.log(this.driver)
//     console.log(this.driver.name)
//     console.log(this.driver.document)
// }


class Car {
    constructor(license, driver){
        this.id;
        this.license = license;
        this.driver = driver;
        this.passenger;
    }

    PrintDC(){
        console.log(this.driver);
        console.log(this.driver.name);
        console.log(this.driver.document);
    }

}