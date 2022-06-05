        <footer>
        <?php $form_widget = new \MailPoet\Form\Widget();
echo $form_widget->widget(array('form' => 1, 'form_type' => 'php'));?>
            <div class="footer-widget">
                    <div class="content-widget-footer">
                    	<div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <?php if(is_active_sidebar('footer-sidebar-1')){
                                        dynamic_sidebar('footer-sidebar-1');
                                    }?>
                                </div>
                                <div class="col-md-4">
                                    <?php if(is_active_sidebar('footer-sidebar-2')){
                                        dynamic_sidebar('footer-sidebar-2');
                                    }?>
                                </div>
                                 <div class="col-md-4">
                                    <?php if(is_active_sidebar('footer-sidebar-3')){
                                        dynamic_sidebar('footer-sidebar-3');
                                    }?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             <div class="container aligncenter copyright"> 
            	© <?php echo date('Y'); ?> <?php echo get_bloginfo('name'); ?> - <?php _e( 'Todos os direitos reservados', 'SG_Onepage' ); ?>
            </div>
        </footer>
        </div>
        <?php wp_footer(); ?>
        <script type="text/javascript">
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
			
			ga('create', 'UA-83851356-1', 'auto');
			ga('send', 'pageview');
				jQuery('.affix-top').affix({
					offset: {
					top: 150
				}
			}); 

    </script>
    </body>
</html>