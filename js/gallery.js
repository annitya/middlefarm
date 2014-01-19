var MiddleFarm = {
    initialize : function()
    {
        MiddleFarm.enableGallery();
    },

    enableGallery : function()
    {
        $('a.thumbnail').click(this.showModal);
        $(document).on('click', MiddleFarm.hideModal);
    },

    showModal : function(e)
    {
        e.preventDefault();
        e.stopPropagation();

        var modalContent = $(this).children('img:first').clone();
        $('.modal-body').html(modalContent);
        $('.modal').modal('show');
    },

    hideModal : function()
    {
        $('.modal').modal('hide');
    }
};

$(document).on('ready', MiddleFarm.initialize);