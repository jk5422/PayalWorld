<!--START FREE VS PREMIUM TAB-->
<li>
    <div class="woo-invoice-row">
        <div class="woo-invoice-col-8">
            <div class="woo-invoice-card woo-invoice-mr-0">
                <div class="woo-invoice-card-body">
                    <table width="100%">
                        <tr>
                            <th style="padding: 20px;font-size:18px" width="50%">Features</th>
                            <th width="25%" style="text-align: center;font-size:18px">Free</th>
                            <th width="25%" style="text-align: center;font-size:18px">Premium</th>
                        </tr>
                        <?php
                        $woo_invoice_comparetable = array(
                            array(
                                'title' => __( 'Bar Code', 'webappick-pdf-invoice-for-woocommerce' ),
                                'free'  => false,
                            ),
                            array(
                                'title' => __( 'QR Code', 'webappick-pdf-invoice-for-woocommerce' ),
                                'free'  => false,
                            ),
                            array(
                                'title' => __( 'ZATCA QR code', 'webappick-pdf-invoice-for-woocommerce' ),
                                'free'  => false,
                            ),
                            array(
                                'title' => __( 'Invoice Backup To Dropbox', 'webappick-pdf-invoice-for-woocommerce' ),
                                'free'  => false,
                            ),
                            array(
                                'title' => __( 'Write Custom CSS', 'webappick-pdf-invoice-for-woocommerce' ),
                                'free'  => false,
                            ),
                            array(
                                'title' => __( 'Custom Invoice Numbering Options', 'webappick-pdf-invoice-for-woocommerce' ),
                                'free'  => false,
                            ),
                            array(
                                'title' => __( 'WPML Compatibility', 'webappick-pdf-invoice-for-woocommerce' ),
                                'free'  => false,
                            ),
                            array(
                                'title' => __( 'Polylang Compatibility', 'webappick-pdf-invoice-for-woocommerce' ),
                                'free'  => false,
                            ),
                            array(
                                'title' => __( 'Automatic Invoicing', 'webappick-pdf-invoice-for-woocommerce' ),
                                'free'  => true,
                            ),
                            array(
                                'title' => __( 'Attach to Order Email', 'webappick-pdf-invoice-for-woocommerce' ),
                                'free'  => true,
                            ),
                            array(
                                'title' => __( 'Invoice Download From My Account', 'webappick-pdf-invoice-for-woocommerce' ),
                                'free'  => true,
                            ),
                            array(
                                'title' => __( 'Custom Date Format', 'webappick-pdf-invoice-for-woocommerce' ),
                                'free'  => true,
                            ),
                            array(
                                'title' => __( 'Display ID/SKU', 'webappick-pdf-invoice-for-woocommerce' ),
                                'free'  => true,
                            ),
                            array(
                                'title' => __( 'Display Currency Code', 'webappick-pdf-invoice-for-woocommerce' ),
                                'free'  => true,
                            ),
                            array(
                                'title' => __( 'Display Payment Method', 'webappick-pdf-invoice-for-woocommerce' ),
                                'free'  => true,
                            ),
                            array(
                                'title' => __( 'Packing Slip', 'webappick-pdf-invoice-for-woocommerce' ),
                                'free'  => true,
                            ),
                            array(
                                'title' => __( 'Footer Info Section', 'webappick-pdf-invoice-for-woocommerce' ),
                                'free'  => true,
                            ),
                            array(
                                'title' => __( 'Bulk Invoice/Packing Slip Download', 'webappick-pdf-invoice-for-woocommerce' ),
                                'free'  => true,
                            ),
                            array(
                                'title' => __( 'Invoice Template Translation', 'webappick-pdf-invoice-for-woocommerce' ),
                                'free'  => true,
                            ),
                            array(
                                'title' => __( 'Display Shipping Cost With Tax / Without Tax', 'webappick-pdf-invoice-for-woocommerce' ),
                                'free'  => true,
                            ),
                            array(
                                'title' => __( 'Total Tax', 'webappick-pdf-invoice-for-woocommerce' ),
                                'free'  => true,
                            ),

                            array(
                                'title' => __( 'Individual Product Tax & Tax %', 'webappick-pdf-invoice-for-woocommerce' ),
                                'free'  => false,
                            ),
                            array(
                                'title' => __( 'Total Without Tax', 'webappick-pdf-invoice-for-woocommerce' ),
                                'free'  => false,
                            ),
                            array(
                                'title' => __( 'Paid Stamp', 'webappick-pdf-invoice-for-woocommerce' ),
                                'free'  => false,
                            ),
                            array(
                                'title' => __( 'Authorized Signature', 'webappick-pdf-invoice-for-woocommerce' ),
                                'free'  => false,
                            ),
                            array(
                                'title' => __( 'Custom Background', 'webappick-pdf-invoice-for-woocommerce' ),
                                'free'  => false,
                            ),
                            array(
                                'title' => __( 'Display Product Image', 'webappick-pdf-invoice-for-woocommerce' ),
                                'free'  => false,
                            ),
                            array(
                                'title' => __( 'Display Product Category', 'webappick-pdf-invoice-for-woocommerce' ),
                                'free'  => false,
                            ),
                            array(
                                'title' => __( 'Display Product Short Description', 'webappick-pdf-invoice-for-woocommerce' ),
                                'free'  => false,
                            ),
                            array(
                                'title' => __( 'Display Discounted Price', 'webappick-pdf-invoice-for-woocommerce' ),
                                'free'  => false,
                            ),
                            array(
                                'title' => __( 'Proforma Invoice', 'webappick-pdf-invoice-for-woocommerce' ),
                                'free'  => false,
                            ),

                            array(
                                'title' => __( 'WooCommerce Subscription Compatibility', 'webappick-pdf-invoice-for-woocommerce' ),
                                'free'  => false,
                            ),
                            array(
                                'title' => __( 'Order Delivery Address Print', 'webappick-pdf-invoice-for-woocommerce' ),
                                'free'  => false,
                            ),
                            array(
                                'title' => __( 'Download Bulk Delivery Address Print', 'webappick-pdf-invoice-for-woocommerce' ),
                                'free'  => false,
                            ),
                            array(
                                'title' => __( 'Custom Paper Size', 'webappick-pdf-invoice-for-woocommerce' ),
                                'free'  => false,
                            ),
                            array(
                                'title' => __( 'Pagination Style', 'webappick-pdf-invoice-for-woocommerce' ),
                                'free'  => false,
                            ),
                            array(
                                'title' => __( 'Display refund details', 'webappick-pdf-invoice-for-woocommerce' ),
                                'free'  => false,
                            ),
                            array(
                                'title' => __( 'Display fee details', 'webappick-pdf-invoice-for-woocommerce' ),
                                'free'  => false,
                            ),
                            array(
                                'title' => __( 'Generate credit note template', 'webappick-pdf-invoice-for-woocommerce' ),
                                'free'  => false,
                            ),




                        );
                        foreach ( $woo_invoice_comparetable as $invoice_feature ) {
                            ?>
                            <tr>
                                <td class="woo-invoice-proFree-feature"><?php printf( esc_html__( '%1$s', 'webappick-pdf-invoice-for-woocommerce' ), $invoice_feature['title'] ); //phpcs:ignore ?></td>
                                <?php if ( false === $invoice_feature['free'] ) { ?>
                                    <td class="woo-invoice-proFree-free"><span
                                            class="dashicons dashicons-no"></span></td>
                                <?php } else { ?>
                                    <td class="woo-invoice-proFree-pro"><span
                                            class="dashicons dashicons-yes"></span></td>
                                <?php } ?>
                                <td class="woo-invoice-proFree-pro"><span
                                        class="dashicons dashicons-yes"></span></td>
                            </tr>
                        <?php } ?>
                        </tfoot>
                    </table>
                </div><!-- end .woo-invoice-card -->
            </div><!-- end .woo-invoice-card -->
        </div><!-- end .woo-invoice-col-8 -->
    </div><!-- end .woo-invoice-row -->
</li>
<!--END FREE VS PREMIUM TAB-->