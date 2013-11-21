function obelix(json) {
    this.firstName = ko.observable(json.firstName);
    this.lastName = ko.observable(json.lastName);

    this.fullName = ko.computed(function() {
        return this.firstName() + ' ' + this.lastName();
    }.bind(this));
}

obelix.prototype = {
    firstName: null,
    lastName: null,
    fullName: null
};