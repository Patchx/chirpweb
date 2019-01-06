const first_page = require('../components/SignupSpa/PageComponents/FirstPage');
const phone_number_page = require('../components/SignupSpa/PageComponents/PhoneNumberPage');

module.exports = function SignupSpaFactory() {
	// ---------------------
	// - Private Functions -
	// ---------------------

	// ----------------
	// - Vue Instance -
	// ----------------

	return new Vue({
	    el: '#vue_app',

	    components: {
	    	'first_page': first_page,
	    	'phone_number_page': phone_number_page,
	    },

	    data: {
	    	current_page: 'first_page',
	    },

	    computed: {
	    	dynamicProps: function() {
	    		var common_props = {
	    			'vue_app': this,
	    		};

	    		if (this.current_page === 'first_page') {
	    			return common_props;
	    		}

	    		if (this.current_page === 'phone_number_page') {
	    			return common_props;
	    		}

	    		return common_props;
	    	}
	    }
	});
}