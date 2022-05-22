<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout.
if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
    echo esc_html( apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) ) );
    return;
}

?>
<div class="woo-custom-checkout-form">
    <form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">
        <div class="accordion checkout-custom-form" id="accordionCustomCheckoutForm">
            <!-- BEGIN PAXES FIELDS -->
            <?php if ( $checkout->get_checkout_fields() ) : ?>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingPaxesDocumentation">
                        <button class="accordion-button collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapsePaxesDocumentation"
                            aria-expanded="false" aria-controls="collapsePaxesDocumentation">
                            Documentación Requerida
                        </button>
                    </h2>

                    <div id="collapsePaxesDocumentation" class="accordion-collapse collapse active show"
                    aria-labelledby="headingPaxesDocumentation" data-bs-parent="#accordionCustomCheckoutForm">
                        <div class="accordion-body">
                            <p class="mt-3">Confirmá las condiciones de entrada a tu destino, los requisitos para la vuelta y las especificaciones necesarias de tus documentos previo a confirmar el viaje</p>

                            <?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <?php do_action( 'woocommerce_checkout_billing' ); ?>
                </div>

                <div class="accordion-item">
                    <?php do_action( 'woocommerce_checkout_shipping' ); ?>
                </div>
                <?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>
            <?php endif; ?>

            <!-- BEGIN COUPON FIELDS -->
            <?php if ( wc_coupons_enabled() ): ?>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingCoupon">
                        <button class="accordion-button collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseCoupon"
                            aria-expanded="false" aria-controls="collapseCoupon">
                            <?php _e('Tengo un cupón de descuento', 'wookapis'); ?>
                        </button>
                    </h2>

                    <div id="collapseCoupon" class="accordion-collapse collapse"
                                        aria-labelledby="headingCoupon" data-bs-parent="#accordionCustomCheckoutForm">
                        <form class="woocommerce-form-coupon" method="post">

                            <div class="coupon-desc"><?php esc_html_e( 'If you have a coupon code, please apply it below.', 'woocommerce' ); ?></div>

                            <div class="form-row form-row-first coupon-input">
                                <input type="text" name="coupon_code" class="input-text" placeholder="<?php esc_attr_e( 'Coupon code', 'woocommerce' ); ?>" id="coupon_code" value="" />
                            </div>

                            <div class="form-row form-row-last coupon-btn">
                                <button type="submit" name="apply_coupon" value="<?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?>"><?php esc_html_e( 'Apply coupon', 'woocommerce' ); ?></button>
                            </div>
                        </form>
                    </div>
                </div>
            <?php endif; ?>
            <!-- END COUPON FIELDS -->

            <!-- BEGIN ORDER DETAILS -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOrderDetails">
                    <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse" data-bs-target="#collapseOrderDetails"
                        aria-expanded="false" aria-controls="collapseOrderDetails">
                        Información de tu viaje y forma de pago
                    </button>
                </h2>

                <div id="collapseOrderDetails" class="accordion-collapse collapse"
                        aria-labelledby="headingOrderDetails" data-bs-parent="#accordionCustomCheckoutForm">

                    <div id="order_review" class="woocommerce-checkout-review-order">
                        <?php do_action( 'woocommerce_checkout_order_review' ); ?>
                    </div>
                </div>
            </div>
            <!-- END ORDER DETAILS -->
        </div>
    </form>
</div>
