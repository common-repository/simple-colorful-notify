(function() {
    tinymce.PluginManager.add('mce_buttons', function( editor, url ) {
        editor.addButton( 'mce_button_2', {
            text: false,
            icon: 'sun',
            type: 'menubutton',
            menu: [
                {
                    text:'Blue Notify',
                    onclick: function() {
                        editor.insertContent('<div class="blue-notify"></div>');
                    }
                },
                {
                    text: 'Red Notify',
                    onclick: function() {
                        editor.insertContent('<div class="red-notify"></div>');
                    }
                },
                {
                    text: 'Green Notify',
                    onclick: function() {
                        editor.insertContent('<div class="green-notify"></div>');
                    }
                },
                {
                    text: 'Orang Notify',
                    onclick: function() {
                        editor.insertContent('<div class="orang-notify"></div>');
                    }
                },
                {
                    text: 'Black Notify',
                    onclick: function() {
                        editor.insertContent('<div class="black-notify"></div>');
                    }
                }
            ]
        });
    });
})();