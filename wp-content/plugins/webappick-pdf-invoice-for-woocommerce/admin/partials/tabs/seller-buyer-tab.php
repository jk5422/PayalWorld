
<!--START SELLER & BUYER  TAB-->
<li>
    <div class="woo-invoice-row">
        <div class="woo-invoice-col-sm-8">
            <div class="woo-invoice-card woo-invoice-mr-0">
                <div class="woo-invoice-card-body">
                    <form action="" method="post">
                        <?php wp_nonce_field( 'seller_form_nonce' ); ?>
                        <h3><?php esc_html_e( 'Seller Block', 'webappick-pdf-invoice-for-woocommerce' ); ?></h3>
                        <div class="woo-invoice-form-group">
                            <label class="woo-invoice-custom-label"
                                   for="logo"><?php esc_html_e( 'Logo Image', 'webappick-pdf-invoice-for-woocommerce' ); ?></label>

                            <div style="display:inline-block;">
                                <?php wp_enqueue_media(); ?>
                                <input id="wpifw_upload_logo_button" type="button" class="button"
                                       value="<?php esc_html_e( 'Upload Logo', 'webappick-pdf-invoice-for-woocommerce' ); ?>"/>
                                <input type='hidden' name='wpifw_logo_attachment_id'
                                       id='wpifw_logo_attachment_id'
                                       value='<?php echo esc_attr( get_option( 'wpifw_logo_attachment_image_id' ) ); ?>'>
                            </div>
                        </div><!-- end .woo-invoice-form-group -->

                        <div class="woo-invoice-form-group">
                            <?php $wpifw_logo_width = '' != get_option('wpifw_logo_width') ? get_option('wpifw_logo_width') : '20%'; ?>
                            <label class="woo-invoice-custom-label"
                                   for="logo-height-width"><?php esc_html_e( 'Logo Size', 'webappick-pdf-invoice-for-woocommerce' ); ?></label>
                            <input class="woo-invoice-uploaded-logo-width woo-invoice-fixed-width woo-invoice-form-control"
                                   type="text" name="wpifw_logo_width"
                                   placeholder="<?php echo esc_html( '20%' ); ?>"
                                   value='<?php echo esc_attr( $wpifw_logo_width ); ?>'>
                        </div><!-- end .woo-invoice-form-group -->

                        <div class="woo-invoice-form-group">
                            <label class="woo-invoice-custom-label"
                                   for="bltitle"><?php esc_html_e( 'Seller Title', 'webappick-pdf-invoice-for-woocommerce' ); ?></label>
                            <input class="woo-invoice-fixed-width woo-invoice-form-control" type="text"
                                   id="bltitle" name="wpifw_block_title_from"
                                   value="<?php echo esc_attr( get_option( 'wpifw_block_title_from' ) ); ?>">
                        </div><!-- end .woo-invoice-form-group -->

                        <div class="woo-invoice-form-group">
                            <label class="woo-invoice-custom-label"
                                   for="cname"><?php esc_html_e( 'Company Name', 'webappick-pdf-invoice-for-woocommerce' ); ?></label>
                            <input class="woo-invoice-fixed-width woo-invoice-form-control" type="text"
                                   id="cname" name="wpifw_cname"
                                   value="<?php echo esc_attr( get_option( 'wpifw_cname' ) ); ?>">
                        </div><!-- end .woo-invoice-form-group -->

                        <div class="woo-invoice-form-group">
                            <label class="woo-invoice-tinymce-label"
                                   for="cdetails"><?php esc_html_e( 'Company Details', 'webappick-pdf-invoice-for-woocommerce' ); ?></label>

                            <div class="woo-invoice-tinymce-textarea">
                                            <textarea style="height:150px;" class="woo-invoice-form-control"
                                                      id="cdetails" name="wpifw_cdetails"
                                                      value=""><?php echo esc_attr( get_option( 'wpifw_cdetails' ) ); ?></textarea>
                            </div><!-- end .woo-invoice-tinymce-textarea -->
                        </div><!-- end .woo-invoice-form-group -->

                        <div class="woo-invoice-form-group">
                            <label class="woo-invoice-tinymce-label"
                                   for="terms-and-condition"><?php esc_html_e( 'Footer 1', 'webappick-pdf-invoice-for-woocommerce' ); ?></label>
                            <div class="woo-invoice-tinymce-textarea">
                                            <textarea style="height:150px;" class="woo-invoice-form-control"
                                                      id="terms-and-condition" name="wpifw_terms_and_condition"
                                                      value=""><?php echo esc_textarea( get_option( 'wpifw_terms_and_condition' ) ); ?></textarea>
                            </div><!-- end .woo-invoice-tinymce-textarea -->

                        </div><!-- end .woo-invoice-form-group -->

                        <div class="woo-invoice-form-group">
                            <label class="woo-invoice-tinymce-label"
                                   for="other-information"><?php esc_html_e( 'Footer 2', 'webappick-pdf-invoice-for-woocommerce' ); ?></label>

                            <div class="woo-invoice-tinymce-textarea">
                                            <textarea style="height:150px;" class="woo-invoice-form-control"
                                                      id="other-information" name="wpifw_other_information"
                                                      value=""><?php echo esc_textarea( get_option( 'wpifw_other_information' ) ); ?></textarea>
                            </div>
                        </div><!-- end .woo-invoice-form-group -->

                        <h3><?php esc_html_e( 'Buyer Block', 'webappick-pdf-invoice-for-woocommerce' ); ?></h3>

                        <div class="woo-invoice-form-group">
                            <div class="woo-invoice-custom-control woo-invoice-custom-switch"
                                 style="padding-left:0!important;">
                                <div class="woo-invoice-toggle-label">
                                    <span class="woo-invoice-checkbox-label"><?php esc_html_e( 'Disable Phone Number', 'webappick-pdf-invoice-for-woocommerce' ); ?></span>
                                </div>
                                <div class="woo-invoice-toggle-container" tooltip="Disable Phone Number."
                                     flow="right">
                                    <input type="hidden" name="wpifw_display_phone" value="0">
                                    <input type="checkbox" class="woo-invoice-custom-control-input"
                                           id="wpifw_display_phone" name="wpifw_display_phone"
                                           value="1" <?php checked( get_option( 'wpifw_display_phone' ), $woo_invoice_current, true ); ?>>
                                    <label class="woo-invoice-custom-control-label"
                                           for="wpifw_display_phone"></label>
                                </div>
                            </div>
                        </div><!-- end .woo-invoice-form-group -->


                        <div class="woo-invoice-form-group">
                            <div class="woo-invoice-custom-control woo-invoice-custom-switch"
                                 style="padding-left:0!important;">
                                <div class="woo-invoice-toggle-label">
                                    <span class="woo-invoice-checkbox-label"><?php esc_html_e( 'Disable Email Address', 'webappick-pdf-invoice-for-woocommerce' ); ?></span>
                                </div>
                                <div class="woo-invoice-toggle-container" tooltip="Disable Email Address."
                                     flow="right">
                                    <input type="hidden" name="wpifw_display_email" value="0">
                                    <input type="checkbox" class="woo-invoice-custom-control-input"
                                           id="wpifw_display_email" name="wpifw_display_email"
                                           value="1" <?php checked( get_option( 'wpifw_display_email' ), $woo_invoice_current, true ); ?>>
                                    <label class="woo-invoice-custom-control-label"
                                           for="wpifw_display_email"></label>
                                </div>
                            </div>
                        </div><!-- end .woo-invoice-form-group -->


                        <div class="woo-invoice-card-footer woo-invoice-save-changes-selector">
                            <input type="submit" style="float:right;" name="wpifw_submit_seller&buyer"
                                   value="<?php esc_html_e( 'Save Changes', 'webappick-pdf-invoice-for-woocommerce' ); ?>"
                                   class="woo-invoice-btn woo-invoice-btn-primary"/>
                        </div><!-- end .woo-invoice-card-footer -->
                    </form>

                </div><!-- end .woo-invoice-card-body -->
            </div><!-- end .woo-invoice-card -->
        </div><!-- end .woo-invoice-col-sm-8 -->
        <div class="woo-invoice-col-sm-4">
            <div class="woo-invoice-card">
                <div class="woo-invoice-card-header">
                    <div class="woo-invoice-card-header-title">
                        <b><?php esc_html_e( 'Logo Preview', 'webappick-pdf-invoice-for-woocommerce' ); ?></b>
                    </div>
                </div>
                <div class="woo-invoice-card-body">
                    <div class='wpifw_logo-preview-wrapper'>
                        <?php
                        if ( get_option( 'wpifw_logo_attachment_image_id' ) && ! empty( get_option( 'wpifw_logo_attachment_image_id' ) ) ) {
                            $woo_invoice_url = wp_get_attachment_url( get_option( 'wpifw_logo_attachment_image_id' ) );
                            ?>
                            <img style="max-width:90px;display: block;margin:0 auto;"
                                 id='wpifw_logo-preview' src='<?php echo esc_url( $woo_invoice_url ); ?>'>
                            <?php
                        } else {
                            ?>
                            <img style="max-width:90px;display: block;margin:0 auto;"
                                 id='wpifw_logo-preview' src=''>
                            <?php
                        }

                        ?>
                    </div>
                </div>
            </div>
        </div><!-- end .woo-invoice-col-sm-4 -->
    </div><!-- end .woo-invoice-row -->
</li>
<!--END SELLER & BUYER  TAB-->

