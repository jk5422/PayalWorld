<!--START SETTING TAB-->
<?php
$challan_order_meta_query = challan_order_meta_query();
$challan_product_meta_query = challan_product_meta_query();
$challan_item_meta_query = challan_item_meta_query();

?>
<li>

    <div class="woo-invoice-row">
        <div class="woo-invoice-col-sm-8 woo-invoice-col-12">
            <div class="woo-invoice-card woo-invoice-mr-0">
                <div class="woo-invoice-card-body">
                    <form action="" method="post">
                        <?php wp_nonce_field( 'invoice_form_nonce' ); ?>
                        <div class="woo-invoice-form-group">
                            <div class="woo-invoice-custom-control woo-invoice-custom-switch"
                                 style="padding-left:0!important;">
                                <div class="woo-invoice-toggle-label">
                                    <span class="woo-invoice-checkbox-label"><?php esc_html_e( 'Enable Invoicing', 'webappick-pdf-invoice-for-woocommerce' ); ?></span>
                                </div>
                                <div class="woo-invoice-toggle-container"
                                     tooltip="Enable Invoicing to generate automatically." flow="right">
                                    <input type="hidden" name="wpifw_invoicing" value="0">
                                    <input type="checkbox" class="woo-invoice-custom-control-input"
                                           id="wpifw_invoicing" name="wpifw_invoicing"
                                           value="1" <?php checked( get_option( 'wpifw_invoicing' ), $woo_invoice_current, true ); ?>>
                                    <label class="woo-invoice-custom-control-label"
                                           for="wpifw_invoicing"></label>
                                </div>
                            </div>
                        </div><!-- end .woo-invoice-form-group -->
                        <div class="woo-invoice-form-group">
                            <div class="woo-invoice-custom-control woo-invoice-custom-switch"
                                 style="padding-left:0!important;">
                                <div class="woo-invoice-toggle-label">
                                    <span class="woo-invoice-checkbox-label"><?php esc_html_e( 'Allow My Account To Download Invoice', 'webappick-pdf-invoice-for-woocommerce' ); ?></span>
                                </div>
                                <div class="woo-invoice-toggle-container"
                                     tooltip="Allow customer to download invoice from my account order list."
                                     flow="right">
                                    <input type="hidden" name="wpifw_download" value="0">
                                    <input title="Allow Customer to Download Invoice From My Account"
                                           type="checkbox" class="woo-invoice-custom-control-input"
                                           id="wpifw_download" name="wpifw_download"
                                           value="1" <?php checked( get_option( 'wpifw_download' ), $woo_invoice_current, true ); ?>>
                                    <label class="woo-invoice-custom-control-label tips"
                                           for="wpifw_download"
                                           title="Allow Customer to Download Invoice From My Account"></label>
                                </div>
                            </div>
                        </div><!-- end .woo-invoice-form-group -->

                        <!--  Allow to download invoice from my account base on order status.-->
                        <div class="woo-invoice-form-group" id="downloadAttechedData" style="display:
                        <?php
                        if ( ( get_option( 'wpifw_download' ) == 1 ) ) {
                            echo 'block';
                        } else {
                            echo 'none';
                        }
                        ?>
                            ">
                            <div class="woo-invoice-custom-checkbox-label"></div>
                            <div class="woo-invoice-custom-checkbox-container">
                                <div class="woo-invoice-custom-control woo-invoice-custom-checkbox">

                                    <input type="checkbox" name="wpifw_invoice_download_check_list[]"
                                           class="woo-invoice-custom-control-input" id="downloadChecked1"
                                           value="processing"
                                        <?php
                                        if ( in_array( 'processing', $wpifw_invoice_download_check_list ) ) {
                                            echo 'checked';
                                        }
                                        ?>
                                    >
                                    <label class="woo-invoice-custom-control-label"
                                           for="downloadChecked1"><?php esc_html_e( 'Processing Order', 'webappick-pdf-invoice-for-woocommerce' ); ?></label>
                                </div>
                                <div class="woo-invoice-custom-control woo-invoice-custom-checkbox">
                                    <input type="checkbox" name="wpifw_invoice_download_check_list[]"
                                           class="woo-invoice-custom-control-input" id="downloadChecked5"
                                           value="on-hold"
                                        <?php
                                        if ( in_array( 'on-hold', $wpifw_invoice_download_check_list ) ) {
                                            echo 'checked';
                                        }
                                        ?>
                                    >
                                    <label class="woo-invoice-custom-control-label"
                                           for="downloadChecked5"><?php esc_html_e( 'On Hold Order', 'webappick-pdf-invoice-for-woocommerce' ); ?></label>
                                </div>
                                <div class="woo-invoice-custom-control woo-invoice-custom-checkbox">

                                    <input type="checkbox" name="wpifw_invoice_download_check_list[]"
                                           class="woo-invoice-custom-control-input" id="downloadChecked2"
                                           value="completed"
                                        <?php
                                        if ( in_array( 'completed', $wpifw_invoice_download_check_list ) ) {
                                            echo 'checked';
                                        }
                                        ?>
                                    >
                                    <label class="woo-invoice-custom-control-label"
                                           for="downloadChecked2"><?php esc_html_e( 'Complete Order', 'webappick-pdf-invoice-for-woocommerce' ); ?></label>
                                </div>
                                <div class="woo-invoice-custom-control woo-invoice-custom-checkbox">
                                    <input type="checkbox" name="wpifw_invoice_download_check_list[]"
                                           class="woo-invoice-custom-control-input" id="downloadChecked3"
                                           value="payment_complete"
                                        <?php
                                        if ( in_array( 'payment_complete', $wpifw_invoice_download_check_list ) ) {
                                            echo 'checked';
                                        }
                                        ?>
                                    >
                                    <label class="woo-invoice-custom-control-label"
                                           for="downloadChecked3"><?php esc_html_e( 'After Payment Complete', 'webappick-pdf-invoice-for-woocommerce' ); ?></label>
                                </div>
                                <div class="woo-invoice-custom-control woo-invoice-custom-checkbox">

                                    <input type="checkbox" name="wpifw_invoice_download_check_list[]"
                                           class="woo-invoice-custom-control-input" id="downloadChecked4"
                                           value="always_allow"
                                        <?php
                                        if ( in_array( 'always_allow', $wpifw_invoice_download_check_list ) ) {
                                            echo 'checked';
                                        }
                                        ?>
                                    >
                                    <label class="woo-invoice-custom-control-label"
                                           for="downloadChecked4"><?php esc_html_e( 'Always Allow', 'webappick-pdf-invoice-for-woocommerce' ); ?></label>
                                </div>
                            </div>
                        </div>
                        <div class="woo-invoice-form-group">
                            <div class="woo-invoice-custom-control woo-invoice-custom-switch"
                                 style="padding-left:0!important;">
                                <div class="woo-invoice-toggle-label">
                                    <span class="woo-invoice-checkbox-label"><?php esc_html_e( 'Invoice Attach to Email', 'webappick-pdf-invoice-for-woocommerce' ); ?></span>
                                </div>

                                <div class="woo-invoice-toggle-container"
                                     tooltip="Attach Invoice to completed order email." flow="right">
                                    <input type="hidden" name="wpifw_order_email" value="0">

                                    <input type="checkbox" id="atttoorder"
                                           class="woo-invoice-custom-control-input atttoorder"
                                           name="wpifw_order_email"
                                           value="1" <?php checked( get_option( 'wpifw_order_email' ), $woo_invoice_current, true ); ?>>
                                    <label class="woo-invoice-custom-control-label tips"
                                           for="atttoorder"></label>
                                </div>
                            </div>
                        </div><!-- end .woo-invoice-form-group -->
                        <!-- Attach Invoice with email based on order status.-->
                        <div class="woo-invoice-form-group" id="emailAttechedData" style="display:
                        <?php
                        if ( ( get_option( 'wpifw_order_email' ) == 1 ) ) {
                            echo 'block';
                        } else {
                            echo 'none';
                        }
                        ?>
                            ">
                            <span class="woo-invoice-custom-checkbox-label"></span>
                            <div class="woo-invoice-custom-checkbox-container">
                                <div class="woo-invoice-custom-control woo-invoice-custom-checkbox">

                                    <input type="checkbox" name="wpifw_email_attach_check_list[]"
                                           class="woo-invoice-custom-control-input" id="emailChecked1"
                                           value="new_order"
                                        <?php
                                        if ( in_array( 'new_order', $wpifw_email_attach_check_list ) ) {
                                            echo 'checked';
                                        }
                                        ?>
                                    >
                                    <label class="woo-invoice-custom-control-label"
                                           for="emailChecked1"><?php esc_html_e( 'New Order', 'webappick-pdf-invoice-for-woocommerce' ); ?></label>
                                </div>

                                <div class="woo-invoice-custom-control woo-invoice-custom-checkbox">

                                    <input type="checkbox" name="wpifw_email_attach_check_list[]"
                                           class="woo-invoice-custom-control-input" id="emailChecked6"
                                           value="customer_completed_order"
                                        <?php
                                        if ( in_array( 'customer_completed_order', $wpifw_email_attach_check_list ) ) {
                                            echo 'checked';
                                        }
                                        ?>
                                    >
                                    <label class="woo-invoice-custom-control-label"
                                           for="emailChecked6"><?php esc_html_e( 'Completed Order', 'webappick-pdf-invoice-for-woocommerce' ); ?></label>
                                </div>

                                <div class="woo-invoice-custom-control woo-invoice-custom-checkbox">

                                    <input type="checkbox" name="wpifw_email_attach_check_list[]"
                                           class="woo-invoice-custom-control-input" id="emailChecked9"
                                           value="customer_on_hold_order"
                                        <?php
                                        if ( in_array( 'customer_on_hold_order', $wpifw_email_attach_check_list ) ) {
                                            echo 'checked';
                                        }
                                        ?>
                                    >
                                    <label class="woo-invoice-custom-control-label"
                                           for="emailChecked9"><?php esc_html_e( 'On Hold Order', 'webappick-pdf-invoice-for-woocommerce' ); ?></label>
                                </div>
                                <div class="woo-invoice-custom-control woo-invoice-custom-checkbox">

                                    <input type="checkbox" name="wpifw_email_attach_check_list[]"
                                           class="woo-invoice-custom-control-input" id="emailChecked5"
                                           value="customer_processing_order"
                                        <?php
                                        if ( in_array( 'customer_processing_order', $wpifw_email_attach_check_list ) ) {
                                            echo 'checked';
                                        }
                                        ?>
                                    >
                                    <label class="woo-invoice-custom-control-label"
                                           for="emailChecked5"><?php esc_html_e( 'Processing Order', 'webappick-pdf-invoice-for-woocommerce' ); ?></label>
                                </div>
                                <div class="woo-invoice-custom-control woo-invoice-custom-checkbox">

                                    <input type="checkbox" name="wpifw_email_attach_check_list[]"
                                           class="woo-invoice-custom-control-input" id="emailChecked7"
                                           value="customer_refunded_order"
                                        <?php
                                        if ( in_array( 'customer_refunded_order', $wpifw_email_attach_check_list ) ) {
                                            echo 'checked';
                                        }
                                        ?>
                                    >
                                    <label class="woo-invoice-custom-control-label"
                                           for="emailChecked7"><?php esc_html_e( 'Refunded Order', 'webappick-pdf-invoice-for-woocommerce' ); ?></label>
                                </div>
                                <div class="woo-invoice-custom-control woo-invoice-custom-checkbox">

                                    <input type="checkbox" name="wpifw_email_attach_check_list[]"
                                           class="woo-invoice-custom-control-input" id="emailChecked8"
                                           value="customer_invoice"
                                        <?php
                                        if ( in_array( 'customer_invoice', $wpifw_email_attach_check_list ) ) {
                                            echo 'checked';
                                        }
                                        ?>
                                    >
                                    <label class="woo-invoice-custom-control-label"
                                           for="emailChecked8"><?php esc_html_e( 'Customer Invoice', 'webappick-pdf-invoice-for-woocommerce' ); ?></label>
                                </div>
                            </div>
                        </div>

                        <!--document output type html -->
                        <div class="woo-invoice-form-group">
                            <div class="woo-invoice-custom-control woo-invoice-custom-switch"
                                 style="padding-left:0!important;">
                                <div class="woo-invoice-toggle-label">
                                    <span class="woo-invoice-checkbox-label"><?php esc_html_e( 'Document Output Type HTML', 'webappick-pdf-invoice-for-woocommerce' ); ?></span>
                                </div>
                                <div class="woo-invoice-toggle-container"
                                     tooltip="Document output type html. Default is PDF." flow="right">
                                    <input type="hidden" name="wpifw_output_type_html" value="0">
                                    <input type="checkbox" id="atttoorder09"
                                           class="woo-invoice-custom-control-input atttoorder09"
                                           name="wpifw_output_type_html"
                                           value="1" <?php checked( get_option( 'wpifw_output_type_html' ), $woo_invoice_current, true ); ?>>
                                    <label class="woo-invoice-custom-control-label tips"
                                           for="atttoorder09"></label>
                                </div>
                            </div>
                        </div><!-- end document output type html -->

                        <div class="woo-invoice-form-group">
                            <div class="woo-invoice-custom-control woo-invoice-custom-switch"
                                 style="padding-left:0!important;">
                                <div class="woo-invoice-toggle-label">
                                    <span class="woo-invoice-checkbox-label"><?php esc_html_e( 'Display Currency Code', 'webappick-pdf-invoice-for-woocommerce' ); ?></span>
                                </div>
                                <div class="woo-invoice-toggle-container" tooltip="" flow="right">
                                    <input type="hidden" name="wpifw_currency_code" value="0">
                                    <input type="checkbox" class="woo-invoice-custom-control-input"
                                           id="discurrency" name="wpifw_currency_code"
                                           value="1" <?php checked( get_option( 'wpifw_currency_code' ), $woo_invoice_current, true ); ?> >
                                    <label class="woo-invoice-custom-control-label"
                                           title="Display Currency Code into Invoice Total"
                                           for="discurrency"></label>
                                </div>
                            </div>
                        </div><!-- end .woo-invoice-form-group -->
                        <div class="woo-invoice-form-group woo-invoice-template-select" tooltip=""
                             flow="right">
                            <label class="woo-invoice-custom-label"
                                   for="templateid"><?php esc_html_e( 'Invoice Template', 'webappick-pdf-invoice-for-woocommerce' ); ?></label>
                            <a class="woo-invoice-btn woo-invoice-btn-primary" data-toggle="modal"
                               data-target="#winvoiceModalTemplates"
                               style="color:#fff"><?php esc_html_e( 'Select Template', 'webappick-pdf-invoice-for-woocommerce' ); ?></a>
                            <div class="woo-invoice-modal fade" id="winvoiceModalTemplates" tabindex="-1"
                                 role="dialog" aria-hidden="true">
                                <div class="woo-invoice-modal-dialog woo-invoice-modal-dialog-centered"
                                     role="document">
                                    <div class="woo-invoice-modal-content">
                                        <div class="woo-invoice-modal-card" data-toggle="lists"
                                             data-lists-values="[&quot;name&quot;]">
                                            <div class="woo-invoice-card-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                                <span aria-hidden="true"
                                                                      style="font-size: 30px;text-align: right;display: block;">×</span>
                                                </button>
                                            </div>
                                            <div class="woo-invoice-card-body" style="height:650px">
                                                <div class="woo-invoice-row">
                                                    <div class="woo-invoice-col-sm-4">
                                                        <a href="#" class="woo-invoice-template-selection"
                                                           data-template="invoice-1"><img
                                                                    src="<?php echo esc_attr( CHALLAN_FREE_PLUGIN_URL . 'admin/images/templates/invoice-1.png' ); ?>"
                                                                    alt="" style="
                                                            <?php
                                                            if ( 'invoice-1' === get_option( 'wpifw_templateid' ) ) {
                                                                echo esc_attr( $woo_invoice_style2 );
                                                            } else {
                                                                echo esc_attr( $woo_invoice_style );
                                                            }
                                                            ?>
                                                                    "></a>
                                                    </div>
                                                    <div class="woo-invoice-col-sm-4">
                                                        <a href="#" class="woo-invoice-template-selection"
                                                           data-template="invoice-2"><img
                                                                    src="<?php echo esc_attr( CHALLAN_FREE_PLUGIN_URL . 'admin/images/templates/invoice-2.png' ); ?>"
                                                                    alt="" style="
                                                            <?php
                                                            if ( 'invoice-2' === get_option( 'wpifw_templateid' ) ) {
                                                                echo esc_attr( $woo_invoice_style2 );
                                                            } else {
                                                                echo esc_attr( $woo_invoice_style );
                                                            }
                                                            ?>
                                                                    "></a>
                                                    </div>

                                                    <div class="woo-invoice-col-sm-4"
                                                         style="position:relative">
                                                        <a href="#" class="woo-invoice-element-disable"
                                                           data-template=""
                                                           style="position: absolute;top: 0;z-index: 3333;"><img
                                                                    src="<?php echo esc_attr( CHALLAN_FREE_PLUGIN_URL . 'admin/images/templates/invoice-3.png' ); ?>"
                                                                    alt=""
                                                                    style="max-width:80%;display:block;margin:0 auto;border: 3px solid #0F74A6;"></a>
                                                        <div style="width: 80%;height: 284px;position: absolute;top: 0;z-index:1111;background: #ddd;opacity: 0.7;margin-left: 25px;"></div>
                                                        <a href="https://webappick.com/plugin/woocommerce-pdf-invoice-packing-slips/?utm_source=customer_site&utm_medium=free_vs_pro&utm_campaign=woo_invoice_free"
                                                           target="_blank"
                                                           style="position: absolute;top: 0;z-index: 2222;background: #DC4C40;color: #fff;padding: 5px;border-radius: 3px;text-transform: uppercase;margin: 120px 80px;">Premium</a>
                                                    </div>
                                                    <div class="woo-invoice-col-sm-4"
                                                         style="position:relative;margin-top: 25px;">
                                                        <a href="#" class="woo-invoice-element-disable"
                                                           data-template=""
                                                           style="position: absolute;top: 0;z-index: 3333;"><img
                                                                    src="<?php echo esc_attr( CHALLAN_FREE_PLUGIN_URL . 'admin/images/templates/invoice-4.png' ); ?>"
                                                                    alt=""
                                                                    style="max-width:80%;display:block;margin:0 auto;border: 3px solid #0F74A6;"></a>
                                                        <div style="width: 80%;height: 281px;position: absolute;top: 0;z-index:1111;background: #ddd;opacity: 0.7;margin-left: 25px;"></div>
                                                        <a href="https://webappick.com/plugin/woocommerce-pdf-invoice-packing-slips/?utm_source=customer_site&utm_medium=free_vs_pro&utm_campaign=woo_invoice_free"
                                                           target="_blank"
                                                           style="position: absolute;top: 0;z-index: 2222;background: #DC4C40;color: #fff;padding: 5px;border-radius: 3px;text-transform: uppercase;margin: 120px 80px;">Premium</a>
                                                    </div>
                                                    <div class="woo-invoice-col-sm-4"
                                                         style="position:relative;margin-top: 25px;">
                                                        <a href="#" class="woo-invoice-element-disable"
                                                           data-template=""
                                                           style="position: absolute;top: 0;z-index: 3333;"><img
                                                                    src="<?php echo esc_attr( CHALLAN_FREE_PLUGIN_URL . 'admin/images/templates/invoice-5.png' ); ?>"
                                                                    alt=""
                                                                    style="max-width:80%;display:block;margin:0 auto;border: 3px solid #0F74A6;"></a>
                                                        <div style="width: 80%;height: 281px;position: absolute;top: 0;z-index:1111;background: #ddd;opacity: 0.7;margin-left: 25px;"></div>
                                                        <a href="https://webappick.com/plugin/woocommerce-pdf-invoice-packing-slips/?utm_source=customer_site&utm_medium=free_vs_pro&utm_campaign=woo_invoice_free"
                                                           target="_blank"
                                                           style="position: absolute;top: 0;z-index: 2222;background: #DC4C40;color: #fff;padding: 5px;border-radius: 3px;text-transform: uppercase;margin: 120px 80px;">Premium</a>
                                                    </div>
                                                    <div class="woo-invoice-col-sm-4"
                                                         style="position:relative;margin-top: 25px;">
                                                        <a href="#" class="woo-invoice-element-disable"
                                                           data-template=""
                                                           style="position: absolute;top: 0;z-index: 3333;"><img
                                                                    src="<?php echo esc_attr( CHALLAN_FREE_PLUGIN_URL . 'admin/images/templates/invoice-6.png' ); ?>"
                                                                    alt=""
                                                                    style="max-width:80%;display:block;margin:0 auto;border: 3px solid #0F74A6;"></a>
                                                        <div style="width: 80%;height: 281px;position: absolute;top: 0;z-index:1111;background: #ddd;opacity: 0.7;margin-left: 25px;"></div>
                                                        <a href="https://webappick.com/plugin/woocommerce-pdf-invoice-packing-slips/?utm_source=customer_site&utm_medium=free_vs_pro&utm_campaign=woo_invoice_free"
                                                           target="_blank"
                                                           style="position: absolute;top: 0;z-index: 2222;background: #DC4C40;color: #fff;padding: 5px;border-radius: 3px;text-transform: uppercase;margin: 120px 80px;">Premium</a>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="woo-invoice-card-footer">
                                                <button class="woo-invoice-btn woo-invoice-btn-primary"
                                                        data-dismiss="modal" aria-label="Close"
                                                        style="float:right;margin-bottom: 20px;">Close
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end .woo-invoice-template -->

                        <div class="woo-invoice-form-group" tooltip="" flow="right">
                            <label class="woo-invoice-custom-label"
                                   for="woo_invoice_paper_size"> <?php esc_html_e( 'Paper Size', 'webappick-pdf-invoice-for-woocommerce' ); ?></label>
                            <select class="woo-invoice-fixed-width woo-invoice-select-control"
                                    id="woo_invoice_paper_size" name="wpifw_invoice_paper_size">
                                <option value="A4" <?php selected( get_option( 'wpifw_invoice_paper_size' ), 'A4', true ); ?>>A4</option>
                                <option value="A5" <?php selected( get_option( 'wpifw_invoice_paper_size' ), 'A5', true ); ?>>A5</option>
                                <option value="letter" <?php selected( get_option( 'wpifw_invoice_paper_size' ), 'letter', true ); ?>>Letter</option>
                            </select>
                        </div><!-- end .woo-invoice-form-group -->

                        <div class="woo-invoice-header-title">
                            <h4><?php esc_html_e( 'Order Settings', 'webappick-pdf-invoice-for-woocommerce' ); ?></h4>
                        </div>

                        <div class="woo-invoice-form-group" tooltip="" flow="right">
                            <label class="woo-invoice-custom-label"
                                   for="invno"><?php esc_html_e( 'Next Invoice No.', 'webappick-pdf-invoice-for-woocommerce' ); ?></label>
                            <input class="woo-invoice-fixed-width woo-invoice-form-control woo-invoice-number-input"
                                   type="number" id="invno" name="wpifw_invoice_no"
                                   value="<?php echo esc_attr( get_option( 'wpifw_invoice_no' ) ); ?>">
                        </div><!-- end .woo-invoice-form-group -->

                        <div class="woo-invoice-form-group" tooltip="" flow="right">
                            <label class="woo-invoice-custom-label"
                                   for="invprefix"><?php esc_html_e( 'Invoice No. Prefix', 'webappick-pdf-invoice-for-woocommerce' ); ?></label>
                            <input class="woo-invoice-fixed-width woo-invoice-form-control" type="text"
                                   id="invprefix" name="wpifw_invoice_no_prefix"
                                   value="<?php echo esc_attr( get_option( 'wpifw_invoice_no_prefix' ) ); ?>">
                        </div><!-- end .woo-invoice-form-group -->

                        <div class="woo-invoice-form-group" tooltip="" flow="right">
                            <label class="woo-invoice-custom-label"
                                   for="insuff"><?php esc_html_e( 'Invoice No. Suffix', 'webappick-pdf-invoice-for-woocommerce' ); ?></label>
                            <input class="woo-invoice-fixed-width woo-invoice-form-control" type="text"
                                   id="insuff" name="wpifw_invoice_no_suffix"
                                   value="<?php echo esc_attr( get_option( 'wpifw_invoice_no_suffix' ) ); ?>">
                        </div><!-- end .woo-invoice-form-group -->
                        <div class="woo-invoice-form-group" tooltip="" flow="right">
                            <label class="woo-invoice-custom-label"
                                   for="wpifw_pdf_invoice_button_behaviour"> <?php esc_html_e( 'Invoice Download as', 'webappick-pdf-invoice-for-woocommerce' ); ?></label>
                            <select class="woo-invoice-fixed-width woo-invoice-select-control"
                                    id="wpifw_pdf_invoice_button_behaviour"
                                    name="wpifw_pdf_invoice_button_behaviour">
                                <option value="new_tab" <?php selected( get_option( 'wpifw_pdf_invoice_button_behaviour' ), 'new_tab', true ); ?> >
                                    Open in new tab
                                </option>
                                <option value="download" <?php selected( get_option( 'wpifw_pdf_invoice_button_behaviour' ), 'download', true ); ?> >
                                    Direct download
                                </option>
                            </select>
                        </div><!-- end .woo-invoice-form-group -->
                        <div class="woo-invoice-form-group" tooltip="" flow="right">
                            <label class="woo-invoice-custom-label"
                                   for="date"> <?php esc_html_e( 'Date Format', 'webappick-pdf-invoice-for-woocommerce' ); ?></label>
                            <select class="woo-invoice-fixed-width woo-invoice-select-control" id="date"
                                    name="wpifw_date_format">
                                <option value="d M, o" <?php selected( get_option( 'wpifw_date_format' ), 'd M, o', true ); ?> >
                                    Date Month, Year
                                </option>
                                <option value="m/d/y" <?php selected( get_option( 'wpifw_date_format' ), 'm/d/y', true ); ?> >
                                    mm/dd/yy
                                </option>
                                <option value="d/m/y" <?php selected( get_option( 'wpifw_date_format' ), 'd/m/y', true ); ?> >
                                    dd/mm/yy
                                </option>
                                <option value="y/m/d" <?php selected( get_option( 'wpifw_date_format' ), 'y/m/d', true ); ?> >
                                    yy/mm/dd
                                </option>
                                <option value="d/m/Y" <?php selected( get_option( 'wpifw_date_format' ), 'd/m/Y', true ); ?>>
                                    dd/mm/yyyy
                                </option>
                                <option value="Y/m/d" <?php selected( get_option( 'wpifw_date_format' ), 'Y/m/d', true ); ?>>
                                    yyyy/mm/dd
                                </option>
                                <option value="m/d/Y" <?php selected( get_option( 'wpifw_date_format' ), 'm/d/Y', true ); ?>>
                                    mm/dd/yyyy
                                </option>
                                <option value="y-m-d" <?php selected( get_option( 'wpifw_date_format' ), 'y-m-d', true ); ?>>
                                    yy-mm-dd
                                </option>
                                <option value="Y-m-d" <?php selected( get_option( 'wpifw_date_format' ), 'Y-m-d', true ); ?>>
                                    yyyy-mm-dd
                                </option>
                            </select>
                        </div><!-- end .woo-invoice-form-group -->


                        <?php  $wpifw_payment_method_show = get_option( 'wpifw_payment_method_show' ) == '' ? true : get_option( 'wpifw_payment_method_show' ); ?>
                        <div class="woo-invoice-form-group">
                            <div class="woo-invoice-custom-control woo-invoice-custom-switch"
                                 style="padding-left:0!important;">
                                <div class="woo-invoice-toggle-label">
                                    <span class="woo-invoice-checkbox-label"><?php esc_html_e( 'Display Payment Method', 'webappick-pdf-invoice-for-woocommerce' ); ?></span>
                                </div>
                                <div class="woo-invoice-toggle-container" tooltip="" flow="right">
                                    <input type="hidden" name="wpifw_payment_method_show" value="0">
                                    <input type="checkbox" class="woo-invoice-custom-control-input"
                                           id="disPayment" name="wpifw_payment_method_show"
                                           value="1" <?php checked( $wpifw_payment_method_show, $woo_invoice_current, true ); ?> >
                                    <label class="woo-invoice-custom-control-label"
                                           title="Display Payment Method into Invoice"
                                           for="disPayment"></label>
                                </div>
                            </div>
                        </div><!-- end .woo-invoice-form-group -->
                        <!-- ===========================
                         Add order meta for invoice.
                         =========================== -->
                        <div class="woo-invoice-form-group" tooltip="" flow="right">
                            <label class="woo-invoice-fixed-label woo-invoice-custom-label"
                                   for="wpifw_product_order_meta_show"> <?php esc_html_e( 'Add Order Meta', 'webappick-pdf-invoice-for-woocommerce' ); ?></label>

                            <a href="#" class="woo-invoice-add-order-meta">
                                <div class="woo-invoice-add-order-meta-btn">
                                    <span class="dashicons dashicons-plus-alt"></span>
                                    <?php esc_html_e( 'Add Order Meta', 'webappick-pdf-invoice-for-woocommerce' ); ?>
                                </div>
                            </a>

                            <div class="woo_invoice_order_meta"
                                 style="float: none; padding-top: 10px;">
                                <?php
                                //                                update_option('_winvoice_order_meta_label', ['email']);
                                //                                update_option('_winvoice_order_meta_name', ['_billing_email']);
                                //                                update_option('_winvoice_order_meta_name_position', ['after_order_meta']);

                                $order_meta_label = get_option( '_winvoice_order_meta_label' );
                                $order_meta_name = get_option( '_winvoice_order_meta_name' );
                                $order_meta_place = get_option( '_winvoice_order_meta_name_position' );

                                if ( is_array($order_meta_label) && ! empty($order_meta_label) ) {
                                    foreach ( $order_meta_label as $key => $value ) {
                                        ?>
                                        <div class="woo_invoice_order_meta_html woo_invoice_meta_html woo_invoice_col_3">
                                            <input  type="text"
                                                    placeholder="Meta Label"
                                                    class="woo-invoice-form-control woo-invoice-order-meta-label"
                                                    name="_winvoice_order_meta_label[]"
                                                    value="<?php echo $value; //phpcs:ignore ?>">
                                            <select
                                                    id="_winvoice_order_meta_name"
                                                    class="woo-invoice-select-control woo-invoice-order-meta"
                                                    name="_winvoice_order_meta_name[]">
                                                <option value=""  disabled  ><?php esc_html_e( 'Select Order Meta', 'webappick-pdf-invoice-for-woocommerce' ); ?></option>
                                                <?php
                                                if ( count( $challan_order_meta_query ) ) {
                                                    foreach ( $challan_order_meta_query as $meta ) {
                                                        $selected = $order_meta_name[ $key ] == $meta->meta_key ? 'selected' : '';
                                                        echo '<option value=' . $meta->meta_key . ' '.$selected.' >' . $meta->meta_key . '</option>'; //phpcs:ignore
                                                    }
                                                }
                                                ?>
                                            </select>
                                            <!--where to show?-->
                                            <select
                                                    id="wpifw_product_order_meta_position"
                                                    class="woo-invoice-select-control woo-invoice-order-meta-position"
                                                    name="_winvoice_order_meta_name_position[]">
                                                <option value=""  disabled  ><?php esc_html_e( 'Whare to show ?', 'webappick-pdf-invoice-for-woocommerce' ); ?></option>

                                                <?php
                                                if ( count( challan_order_meta_data_position() ) ) {
                                                    foreach ( challan_order_meta_data_position() as $index => $val ) {
                                                        $selected = $index == $order_meta_place[ $key ] ? 'selected' : '';
                                                        echo '<option value=' . $index . ' ' . $selected . '>' . $val . '</option>'; //phpcs:ignore
                                                    }
                                                }
                                                ?>
                                            </select>
                                            <a href="#"
                                               class="woo-invoice-delete-order-meta"><span
                                                        class="dashicons dashicons-trash"
                                                        style="color:#D94D40"></span></a>
                                        </div>

                                        <?php
                                    }
                                } else {

                                    ?>
                                    <div style="display: none;">
                                        <div class="woo_invoice_order_meta_html woo_invoice_meta_html woo_invoice_col_3">
                                            <input data="2" type="text"
                                                   placeholder="Meta Label"
                                                   class="woo-invoice-form-control woo-invoice-order-meta-label"
                                                   name="_winvoice_order_meta_label[]"
                                            >
                                            <select
                                                    id="wpifw_product_order_meta_show"
                                                    class="woo-invoice-select-control woo-invoice-order-meta"
                                                    name="_winvoice_order_meta_name[]"
                                            >
                                                <option value="" disabled  ><?php esc_html_e( 'Select Order Meta', 'webappick-pdf-invoice-for-woocommerce' ); ?></option>
                                                <?php
                                                if ( count( $challan_order_meta_query ) ) {
                                                    foreach ( $challan_order_meta_query as $meta ) {
                                                        echo '<option value=' . $meta->meta_key . '>' . $meta->meta_key . '</option>'; //phpcs:ignore
                                                    }
                                                }
                                                ?>
                                            </select>
                                            <!--where to show?-->
                                            <select
                                                    id="wpifw_product_order_meta_position"
                                                    class="woo-invoice-select-control woo-invoice-order-meta-position"
                                                    name="_winvoice_order_meta_name_position[]"
                                            >
                                                <option value="" disabled  ><?php esc_html_e( 'Whare to show ?', 'webappick-pdf-invoice-for-woocommerce' ); ?></option>
                                                <?php

                                                if ( count( challan_order_meta_data_position() ) ) {
                                                    foreach ( challan_order_meta_data_position() as $key => $val ) {
                                                        echo '<option value=' . $key . '>' . $val . '</option>'; //phpcs:ignore
                                                    }
                                                }
                                                ?>
                                            </select>
                                            <a href="#"
                                               class="woo-invoice-delete-order-meta"><span
                                                        class="dashicons dashicons-trash"
                                                        style="color:#D94D40"></span></a>
                                        </div>

                                    </div>

                                <?php  } ?>
                            </div>
                            <p style="opacity: .7" class="woo_invoice_meta_html woo_invoice_col_3">Notice: If order meta value is empty or an array will not display.</p>

                        </div>
                        <!-- ===========================
                         End Add order meta for invoice.
                         =========================== -->
                        <div class="woo-invoice-header-title">
                            <h4><?php esc_html_e( 'Product Settings', 'webappick-pdf-invoice-for-woocommerce' ); ?></h4>
                        </div>
                        <div class="woo-invoice-form-group" tooltip="Keep Empty for no limit" flow="right">
                            <label class="woo-invoice-custom-label"
                                   for="title-limit"><?php esc_html_e( 'Product Title limit', 'webappick-pdf-invoice-for-woocommerce' ); ?></label>
                            <input class="woo-invoice-fixed-width woo-invoice-number-input woo-invoice-form-control"
                                   type="number" id="title-limit" name="wpifw_invoice_product_title_length"
                                   value="<?php echo esc_attr( get_option( 'wpifw_invoice_product_title_length' ) ); ?>">
                        </div><!-- end .woo-invoice-form-group -->

                        <div class="woo-invoice-form-group" tooltip="" flow="right">
                            <label class="woo-invoice-custom-label"
                                   for="disid"> <?php esc_html_e( 'Display ID/SKU', 'webappick-pdf-invoice-for-woocommerce' ); ?></label>
                            <select class="woo-invoice-fixed-width woo-invoice-select-control" id="disid"
                                    name="wpifw_disid">
                                <option value="SKU" <?php selected( get_option( 'wpifw_disid' ), 'SKU', true ); ?>><?php esc_html_e( 'SKU', 'webappick-pdf-invoice-for-woocommerce' ); ?></option>
                                <option value="ID" <?php selected( get_option( 'wpifw_disid' ), 'ID', true ); ?>><?php esc_html_e( 'ID', 'webappick-pdf-invoice-for-woocommerce' ); ?></option>
                                <option value="None" <?php selected( get_option( 'wpifw_disid' ), 'None', true ); ?>><?php esc_html_e( 'None', 'webappick-pdf-invoice-for-woocommerce' ); ?></option>
                            </select>
                        </div><!-- end .woo-invoice-form-group -->

                        <!--===========================
                        Add Product meta for invoice.
                        =========================== -->
                        <div class="woo-invoice-form-group" tooltip="" flow="right">
                            <label class="woo-invoice-fixed-label woo-invoice-custom-label"
                                   for="wpifw_product_post_meta_show"> <?php esc_html_e( 'Add Product Meta', 'webappick-pdf-invoice-for-woocommerce' ); ?></label>
                            <a href="#" class="woo-invoice-product-add-meta">
                                <div class="woo-invoice-product-add-meta">
                                    <span class="dashicons dashicons-plus-alt"></span>
                                    <?php esc_html_e( 'Add Product Meta', 'webappick-pdf-invoice-for-woocommerce' ); ?>
                                </div>
                            </a>
                            <div class="woo_invoice_product_meta"
                                 style="float:none; padding-top: 10px;">
                                <?php
                                $post_meta_label = get_option('_winvoice_post_meta_label');
                                $post_meta_name = get_option('_winvoice_post_meta_name');
                                if ( false == $post_meta_label ) {
                                    $post_meta_label = '';
                                }
                                if ( $post_meta_label ) {
                                        ?>
                                        <div class="woo_invoice_product_meta_html woo_invoice_meta_html woo_invoice_col_2">

                                                 <input type="text"
                                                        placeholder="Meta Label"
                                                        class="woo-invoice-form-control woo-invoice-product-post-meta-label"
                                                        name="_winvoice_post_meta_label"
                                                        value="<?php echo esc_html( $post_meta_label ); ?>">

                                            <select
                                                    id="wpifw_product_post_meta_show"
                                                    class="woo-invoice-select-control woo-invoice-product-post-meta"
                                                    name="_winvoice_post_meta_name">
                                                <option value="" <?php selected( get_option( 'wpifw_product_post_meta_show' ), '', true ); ?>><?php esc_html_e( 'Select Post Meta', 'webappick-pdf-invoice-for-woocommerce' ); ?></option>
                                                <?php
                                                if ( ! empty( $challan_product_meta_query ) ) {
                                                    foreach ( $challan_product_meta_query as $meta ) {
                                                        $selected = $post_meta_name == $meta->meta_key ? 'selected' : '';
                                                        echo '<option value=' . $meta->meta_key . ' ' . $selected . '>' . $meta->meta_key . '</option>'; //phpcs:ignore
                                                    }
                                                }
                                                ?>
                                            </select>
                                            <a href="#"
                                               class="woo-invoice-delete-product-meta"><span
                                                        class="dashicons dashicons-trash"
                                                        style="color:#D94D40"></span></a>
                                        </div>
                                        <?php

                                } else {
                                    ?>
                                    <div style="display: none">
                                        <div class="woo_invoice_product_meta_html woo_invoice_meta_html woo_invoice_col_2">
                                            <input type="text"
                                                   name="_winvoice_post_meta_label"
                                                   placeholder="Meta Label"
                                                   class="woo-invoice-form-control woo-invoice-product-post-meta-label">
                                            <select
                                                    name="_winvoice_post_meta_name"
                                                    id="wpifw_product_post_meta_show"
                                                    class="woo-invoice-select-control woo-invoice-product-post-meta">
                                                <option disabled
                                                        value="" <?php selected( get_option( 'wpifw_product_post_meta_show' ), '', true ); ?>><?php esc_html_e( 'Select Post Meta', 'webappick-pdf-invoice-for-woocommerce' ); ?></option>
                                                <?php
                                                if ( count( $challan_product_meta_query ) ) {
                                                    foreach ( $challan_product_meta_query as $meta ) {
                                                        echo '<option value=' . esc_attr( $meta->meta_key ) . ' ' . selected( get_option( 'wpifw_product_post_meta_show' ), $meta->meta_key, true ) . '>' . esc_attr( $meta->meta_key ) . '</option>';
                                                    }
                                                }
                                                ?>
                                            </select>
                                            <a href="#"
                                               class="woo-invoice-delete-product-meta"><span
                                                        class="dashicons dashicons-trash"
                                                        style="color:#D94D40"></span></a>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <p style="opacity: .7" class="woo_invoice_meta_html woo_invoice_col_3">Notice: If product meta value is empty or an array will not display.</p>

                        </div>
                        <!-- ==================================
                            End Add Product meta for invoice.
                         ================================== -->


                        <!-- ===============================
                            Add order item meta for invoice.
                         =============================== -->

                        <div class="woo-invoice-form-group" tooltip="" flow="right">
                            <label class="woo-invoice-fixed-label woo-invoice-custom-label"
                                   for="wpifw_order_item_meta_show"> <?php esc_html_e( 'Add Order Item Meta', 'webappick-pdf-invoice-for-woocommerce' ); ?></label>
                            <a href="#" class="woo-invoice-add-order-item-meta">
                                <div class="woo-invoice-add-order-item-meta">
                                    <span class="dashicons dashicons-plus-alt"></span>
                                    <?php esc_html_e( 'Add Order Item Meta', 'webappick-pdf-invoice-for-woocommerce' ); ?>
                                </div>
                            </a>
                            <div class="woo_invoice_order_item_meta"
                                 style="float:none; padding-top: 10px;">
                                <?php
                                $item_meta_label = get_option('_winvoice_order_item_meta_label');
                                $item_meta_name = get_option('_winvoice_order_item_meta_name');

//                                print_r($challan_item_meta_query);
                                if ( false == $item_meta_label ) {
                                    $item_meta_label = '';
                                }
                                if ( $item_meta_label ) {
                                        ?>
                                        <div class="woo_invoice_order_item_meta_html woo_invoice_meta_html woo_invoice_col_2">
                                            <input type="text"
                                                   placeholder="Item Meta Label"
                                                   class="woo-invoice-form-control woo-invoice-order-item-meta-label"
                                                   name="_winvoice_order_item_meta_label"
                                                   value="<?php echo esc_html( $item_meta_label ); ?>">
                                            <select
                                                    id="wpifw_order_item_meta_show"
                                                    class="woo-invoice-select-control woo-invoice-order-item-meta"
                                                    name="_winvoice_order_item_meta_name">
                                                <option value="" <?php selected( get_option( 'wpifw_order_item_meta_show' ), '', true ); ?>><?php esc_html_e( 'Select Order Item Meta', 'webappick-pdf-invoice-for-woocommerce' ); ?></option>
                                                <?php
                                                if ( ! empty( $challan_item_meta_query ) ) {
                                                    foreach ( $challan_item_meta_query as $meta ) {
                                                        $selected = $item_meta_name == $meta->meta_key ? 'selected' : '';
                                                        echo '<option value=' . $meta->meta_key . ' ' . $selected . '>' . $meta->meta_key . '</option>'; //phpcs:ignore
                                                    }
                                                }
                                                ?>
                                            </select>
                                            <a href="#"
                                               class="woo-invoice-delete-order-item-meta"><span
                                                        class="dashicons dashicons-trash"
                                                        style="color:#D94D40"></span></a>
                                        </div>
                                        <?php

                                } else {
                                    ?>
                                    <div style="display: none">
                                        <div class="woo_invoice_order_item_meta_html woo_invoice_meta_html woo_invoice_col_2">
                                            <input type="text"
                                                   name="_winvoice_order_item_meta_label"
                                                   placeholder="Item Meta Label"
                                                   class="woo-invoice-form-control woo-invoice-order-item-meta-label">
                                            <select
                                                    name="_winvoice_order_item_meta_name"
                                                    id="wpifw_order_item_meta_show"
                                                    class="woo-invoice-select-control woo-invoice-order-item-meta">
                                                <option disabled
                                                        value="" <?php selected( get_option( 'wpifw_order_item_meta_show' ), '', true ); ?>><?php esc_html_e( 'Select Order Item Meta', 'webappick-pdf-invoice-for-woocommerce' ); ?></option>
                                                <?php

                                                if ( count( $challan_item_meta_query ) ) {

                                                    foreach ( $challan_item_meta_query as $meta ) {
                                                        echo '<option value=' . esc_attr( $meta->meta_key ) . ' ' . selected( get_option( 'wpifw_order_item_meta_show' ), $meta->meta_key, true ) . '>' . esc_attr( $meta->meta_key ) . '</option>';
                                                    }
                                                }
                                                ?>
                                            </select>
                                            <a href="#"
                                               class="woo-invoice-delete-order-item-meta"><span
                                                        class="dashicons dashicons-trash"
                                                        style="color:#D94D40"></span></a>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <p style="opacity: .7" class="woo_invoice_meta_html woo_invoice_col_3">Notice: If order item meta value is empty or an array will not display.</p>

                        </div>
                        <!-- =================================
                            End order item meta for invoice.
                         =================================== -->





                        <div class="woo-invoice-header-title">
                            <h4><?php esc_html_e( 'Order Total Settings', 'webappick-pdf-invoice-for-woocommerce' ); ?></h4>
                        </div>
                        <!--=======================================================================-->
                        <!--  Display shipping total with tax and without tax-->
                        <!--=======================================================================-->
                        <div class="woo-invoice-form-group" tooltip=""
                             flow="right">
                            <label class="woo-invoice-custom-label"
                                   for="wpifw_invoice_display_shipping_total"> <?php esc_html_e( 'Display Shipping Total', 'webappick-pdf-invoice-for-woocommerce' ); ?></label>
                            <select id="wpifw_invoice_display_shipping_total"
                                    name="wpifw_invoice_display_shipping_total"
                                    class="woo-invoice-fixed-width woo-invoice-select-control">
                                <option value="wpifw_invoice_display_shipping_total_with_tax" <?php selected( get_option( 'wpifw_invoice_display_shipping_total' ), 'wpifw_invoice_display_shipping_total_with_tax', true ); ?>><?php esc_html_e( 'With Tax', 'webappick-pdf-invoice-for-woocommerce' ); ?></option>
                                <option value="wpifw_invoice_display_shipping_total_without_tax" <?php selected( get_option( 'wpifw_invoice_display_shipping_total' ), 'wpifw_invoice_display_shipping_total_without_tax', true ); ?>><?php esc_html_e( 'Without Tax', 'webappick-pdf-invoice-for-woocommerce' ); ?></option>
                            </select>
                        </div>
                        <!--=======================================================================-->
                        <!--  Display shipping total with tax and without tax-->
                        <!--=======================================================================-->

                        <?php  $wpifw_show_order_note = get_option( 'wpifw_show_order_note' ) == '' ? 1 : get_option( 'wpifw_show_order_note' ); ?>

                        <div class="woo-invoice-form-group">
                            <div class="woo-invoice-custom-control woo-invoice-custom-switch"
                                 style="padding-left:0!important;">
                                <div class="woo-invoice-toggle-label">
                                    <span class="woo-invoice-checkbox-label"><?php esc_html_e( 'Display Order Note', 'webappick-pdf-invoice-for-woocommerce' ); ?></span>
                                </div>
                                <div class="woo-invoice-toggle-container" tooltip="" flow="right">
                                    <input type="hidden" name="wpifw_show_order_note" value="0">
                                    <input type="checkbox" class="woo-invoice-custom-control-input"
                                           id="wpifw_show_order_note" name="wpifw_show_order_note"
                                           value="1" <?php checked( $wpifw_show_order_note, $woo_invoice_current, true ); ?> >
                                    <label class="woo-invoice-custom-control-label"
                                           for="wpifw_show_order_note"></label>
                                </div>
                            </div>
                        </div><!-- end .woo-invoice-form-group -->

                        <!-------------------------------------------
                                   Write custom css.
                        -------------------------------------------->


                        <div class="woo-invoice-form-group">
                            <label class="woo-invoice-fixed-label woo-invoice-custom-label"
                                   for="wpifw_custom_css"><?php echo esc_html_e( 'Invoice Template CSS', 'webappick-pdf-invoice-for-woocommerce' ); ?></label>

                            <div class="woo-invoice-tinymce-textarea wpifw-wirte-custom-css">
                                <div tooltip="<?php esc_html_e( 'Write Invoice Template CSS', 'webappick-pdf-invoice-for-woocommerce' ); ?>"
                                     flow="right">
                                    <textarea style="height:100px;" class="woo-invoice-form-control" id="wpifw_custom_css"
                                              name="wpifw_custom_css"><?php echo( ! empty( get_option( 'wpifw_custom_css' ) ) ? esc_html( get_option( 'wpifw_custom_css' ) ) : '' ); ?></textarea>
                                </div>
                                <p style="opacity: 0.7">Example: body{ color:red } span{ color:green } td{ color:blue } th{ color:yellow
                                    }</p>
                            </div>
                        </div> <!-- End write custom css -->

                        <div class="woo-invoice-form-group">
                            <div class="woo-invoice-custom-control woo-invoice-custom-switch"
                                 style="padding-left:0!important;">
                                <div class="woo-invoice-toggle-label">
                                    <span class="woo-invoice-checkbox-label"><?php esc_html_e( 'Enable Debug Mode', 'webappick-pdf-invoice-for-woocommerce' ); ?></span>
                                </div>
                                <div class="woo-invoice-toggle-container"
                                     tooltip="<?php esc_html_e( 'Enable debug mode to show errors.', 'webappick-pdf-invoice-for-woocommerce' ); ?>"
                                     flow="right">
                                    <input type="hidden" name="wpifw_pdf_invoice_debug_mode" value="0">
                                    <input type="checkbox" class="woo-invoice-custom-control-input"
                                           id="wpifw_pdf_invoice_debug_mode"
                                           name="wpifw_pdf_invoice_debug_mode"
                                           value="1" <?php checked( get_option( 'wpifw_pdf_invoice_debug_mode' ), $woo_invoice_current, true ); ?> >
                                    <label class="woo-invoice-custom-control-label"
                                           for="wpifw_pdf_invoice_debug_mode"></label>
                                </div>
                            </div>
                        </div><!-- end .woo-invoice-form-group -->


                        <div class="woo-invoice-card-footer woo-invoice-save-changes-selector">
                            <input style="float:right;" class="woo-invoice-btn woo-invoice-btn-primary"
                                   type="submit" name="wpifw_submit"
                                   value="<?php esc_html_e( 'Save Changes', 'webappick-pdf-invoice-for-woocommerce' ); ?>"/>
                        </div><!-- end .woo-invoice-card-footer -->
                    </form>
                </div><!-- end .woo-invoice-card-body -->
            </div><!-- end .woo-invoice-card -->
        </div><!-- end .woo-invoice-col-sm-8 -->

        <div class="woo-invoice-col-sm-4 woo-invoice-col-12">

            <?php
            $countries = [ 'ar', 'ary' ];
            global $locale;
            if ( in_array($locale, $countries) ) : ?>
                <div class="woo-invoice-col-sm-12 woo-invoice-col-12">
                    <div class="woo-invoice-card">
                        <div class="woo-invoice-card-header woo-invoice_zatca_notice_header" style="text-align: center;">
                            <h1  style="color: red!important;font-size: 20px;"  ><?php esc_html_e( 'Challan Pro Implements ZATCA.', 'webappick-pdf-invoice-for-woocommerce' ) ?></h1>
                        </div>
                        <div class="woo-invoice-card-body woo-invoice_zatca_notice_body" >
                            <p><?php esc_html_e( 'Challan Pro version implements ZATCA ( Zakat, Tax and Customs Authority ) QR code rules according to The Saudi Arab govt law. ', 'webappick-pdf-invoice-for-woocommerce' ) ?></p>
                            <a class="woo-invoice-btn woo-invoice-btn-primary" style="margin-left: 45%;" href="https://webappick.com/plugin/woocommerce-pdf-invoice-packing-slips/?utm_source=customer_site&utm_medium=free_vs_pro&utm_campaign=woo_invoice_free" target="_blank"><?php esc_html_e( 'Buy Now', 'webappick-pdf-invoice-for-woocommerce' ) ?></a>
                            <a class="invoice_template_preiview_btn" target="_blank"
                               href="https://rb.gy/1v530d"><?php echo esc_html_e( 'TEST QR CODE', 'webappick-pdf-invoice-for-woocommerce' ) ?></a>

                        </div>
                    </div>
                </div>
            <?php endif;?>
            <div class="woo-invoice-card">
                <div class="woo-invoice-card-header">
                    <h4><?php esc_html_e( 'SELECTED TEMPLATE', 'webappick-pdf-invoice-for-woocommerce' ); ?></h4>
                </div><!-- end .woo-invoice-card-header -->
                <div class="woo-invoice-card-body" style="text-align: center">
                    <?php $template_name = get_option( 'wpifw_templateid' ); ?>
                    <img class="woo-invoice-template-preview"
                         src="<?php echo esc_attr( CHALLAN_FREE_PLUGIN_URL . 'admin/images/templates/' . $template_name ); ?>.png"
                         alt="Preview Template">
                    <?php
                    // Preview real order if order exist.
                    function get_last_order_id(){
                        global $wpdb;
                        $statuses = function_exists('wc_get_order_statuses') ? array_keys(  wc_get_order_statuses() ) : '';//phpcs:ignore
						$statuses = ! empty( $statuses ) ? implode("','", $statuses) : '';//phpcs:ignore
						// Getting last Order ID (max value)
						$results = $wpdb->get_col(" SELECT MAX(ID) FROM {$wpdb->prefix}posts WHERE post_type LIKE 'shop_order' AND post_status IN ( '$statuses' ) " ); // phpcs:ignore.

                        return reset($results);
                    }
                    $order_id = get_last_order_id();
                    if ( '' != $order_id ) { ?>
                        <a class="invoice_template_preiview_btn" target="_blank"
                           href="<?php echo esc_url( wp_nonce_url( admin_url( 'admin-ajax.php?action=wpifw_generate_invoice&order_id=' . $order_id ), 'woo_invoice_ajax_nonce' ) );?>"><?php echo esc_html_e( 'PREVIEW LAST ORDER', 'webappick-pdf-invoice-for-woocommerce' ) ?></a>

                    <?php }else { ?>
                        <a class="invoice_template_preiview_btn" target="_blank"
                           href="<?php echo esc_attr( CHALLAN_FREE_PLUGIN_URL . 'admin/images/templates/' . $template_name ); ?>.png"><?php echo esc_html_e( 'PREVIEW', 'webappick-pdf-invoice-for-woocommerce' ) ?></a>

                    <?php }
                    ?>
                </div><!-- end .woo-invoice-card-body -->
            </div><!-- end .woo-invoice-card -->

            <div class="woo_invoice_template_free_vs_pro">
                <div class="woo-invoice-card-body" style="text-align: center">
                    <a class="invoice_template_preiview_btn" target="_blank"
                       href="<?php echo esc_url( admin_url() . 'admin.php?page=webappick-woo-pro-vs-free'  ); ?>"><?php echo esc_html_e( 'Free VS Pro', 'webappick-pdf-invoice-for-woocommerce' ) ?></a>
                </div><!-- end .woo-invoice-card-body -->
            </div><!-- end .woo-invoice-card -->


        </div><!-- end .woo-invoice-col-sm-4 -->
    </div><!-- end .woo-invoice-row -->
</li>
<!--END SETTING TAB-->


