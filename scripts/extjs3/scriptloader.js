Ext.ux.OnDemandLoadByAjax = function() {
    loadComponent = function(component) {
        var sURL = null;
        var sCALLBACK = null;

        if (typeof component === "string") {
            sURL = component;
        } else if (typeof component === "object") {
            sURL = component[0];
            sCALLBACK = component[1];
        }

        handleSuccess = function(response, options) {
            var head = document.getElementsByTagName("head")[0];
            var js = document.createElement('script');
            js.setAttribute("type", "text/javascript");
            js.text = response.responseText;
            if (!document.all) {
                js.innerHTML = response.responseText;
            }

            head.appendChild(js);
            if (typeof sCALLBACK == "function") {
                if (document.all) {
                    sCALLBACK();
                } else {
                    sCALLBACK.defer(50);
                }
            }
        }

        handleFailure = function(response, options) {
            alert('Dynamic load script: [' + sURL + '] failed!');
        }

        Ext.Ajax.request({
            url: sURL ,method: 'GET' ,success: handleSuccess ,failure: handleFailure ,disableCaching : false
        });

    }
    
    return {
        load: function(components) {
            Ext.each(components, function(component) {
                loadComponent(component);
            });
        }
    }
}();


