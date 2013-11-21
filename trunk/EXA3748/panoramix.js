function panoramix() {
}

panoramix.prototype = {
    loadobelixs: function(callback) {
        // Send obelixs data after 2sec. to simulate data retrieving delay.
        setTimeout(function() {
            callback([
                {firstName: 'Grégory', lastName: 'Ghez'},
                {firstName: 'John', lastName: 'Doe'},
                {firstName: 'Mickael', lastName: 'Smith'}]);
        }.bind(this), 2000);
    }
};

var panoramixInstance = null;

panoramix.getInstance = function() {
    if (panoramixInstance === null) {
        panoramixInstance = new panoramix();
    }

    return panoramixInstance;
};