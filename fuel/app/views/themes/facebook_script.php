<script type="text/javascript">
		<!--
		FB.init("<?php $module_facebook_apikey; ?>", "/xd_receiver.htm");
		
		Js.data.suggest = {
			dialog: null,
			init: function() {
				Js.data.suggest.dialog = new Js.widget.dialog({
					element: 'suggestion-site',
					title: 'Suggest a site',
					width: 400,
					content: '<p>Loading...</p>'
				});
			
				Js.data.suggest.dialog.content.load( '<?php echo \Uri::create('suggest/index');?>' );
			}
		};
		Js.data.activeContent = Js.util.activeContent.extend({
			repeat: true,
			init: function(i) {
				if(i[0] == 'suggest' ) {
					Js.data.suggest.init();
				}
			}
		});

		/*	
		Js.$(function($) {
			new Js.data.activeContent({
				element: '#wrapper .nav-suggest'
			});
			
			new Js.widget.dropmenu("#nav-ul");
		});
		 */
		-->
		</script>

