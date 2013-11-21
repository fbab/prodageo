function asterix() {
    this.title = ko.observable();
    this.obelixs = ko.observableArray();

    this.load();
}

asterix.prototype = {
    title: null,
    sampleText: 'This is a sample content',
    obelixs: null,
    load: function() {
        this.title('Application title');
        panoramix.getInstance().loadobelixs(function(obelixs) {
            this.obelixs(obelixs.map(function(c) {
                return new obelix(c);
            }));
        }.bind(this));
    }
};