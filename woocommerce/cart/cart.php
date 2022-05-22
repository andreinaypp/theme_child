<?php
/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.8.0
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_cart' ); ?>
<div class="section-cart">
	<div class="container">
		<h1 class="title-page">CARRITO</h1>
		<div class="row mt-5">
			<div class="col-12 col-lg-3">
				<div class="btn-cart mb-1">
					<button class="btn btn-white-gray btn-center-out" type="submit">
						Ingresar
					</button>
				</div>
				<div class="btn-cart mb-1">
					<button class="btn btn-white-gray btn-center-out" type="submit">
						Registrarse
					</button>
				</div>
				<div class="btn-cart mb-1">
					<button class="btn btn-white-gray btn-center-out" type="submit">
						Seguir comprando
					</button>
				</div>
			</div>
			<div class="col-12 col-lg-9">
				<div class="items-cart">
					<span>Detalles de Mi Compra</span>
				</div>
				<div class="row mt-4 ms-0 me-0">
					<div class="col-12 col-md-9 details-flight p-0">
						<div class="row ms-0 me-0">
							<div class="col-3 column-shaded-details-flight">
								<i class="fas fa-plane"></i>
								<span class="text-ida-vuelta">Ida</span>
							</div>
							<div class="col-3 column-shaded-details-flight">
								<span class="text-details-flight">
									MVD<br>Montevideo, UY
								</span>
							</div>
							<div class="col-4 column-shaded-details-flight">
								<span class="text-details-flight">
									CDG<br>París, FR
								</span>
							</div>
							<div class="col-2 column-shaded-details-flight">
								<span class="text-details-flight">
									23 Mar 22
								</span>
							</div>
						</div>
						<div class="row ms-0 me-0">
							<div class="col-3 column-details-flight">
								<img src="https://i.pinimg.com/originals/9e/c0/70/9ec07079e7a9e68c85ad3498c3af475b.jpg" alt="" class="logo-airline">
								<span class="text-details-flight ps-2">
									United Airlines
								</span>
							</div>
							<div class="col-3 column-details-flight">
								<span class="text-hour-flight">
									01:32
								</span>
								<div class="position-relative ms-2">
									<img class="arrow-flight" src="<?php echo WOOKAPIS_IMG . 'vuelos/arrows-flight.jpg';?>" alt="arrows">
									<span class="text-escala">
										<?php if( count($segment) > 1):?>
										<?php echo (count($segment)-1); ?> escala<?php if( count($segment) > 2):?>s<?php endif; ?>
										<?php else: ?>
											directo
										<?php endif; ?>
									</span>
								</div>
							</div>
							<div class="col-4 column-details-flight">
								<span class="text-hour-flight">
									06:25
								</span>
								<span class="time-flight">
									4h 53 min
								</span>
							</div>
							<div class="col-2 column-details-flight">
								<button type="button"
									class="more-info btn btn-white-yellow btn-center-out"
									data-bs-toggle="modal"
									data-bs-target="">
									+ info
								</button>
							</div>
						</div>
						<div class="row ms-0 me-0">
							<div class="col-3 column-shaded-details-flight">
								<i class="fas fa-plane plane-left"></i>
								<span class="text-ida-vuelta">Vuelta</span>
							</div>
							<div class="col-3 column-shaded-details-flight">
								<span class="text-details-flight">
									CDG<br>París, FR
								</span>
							</div>
							<div class="col-4 column-shaded-details-flight">
								<span class="text-details-flight">
									MVD<br>Montevideo, UY
								</span>
							</div>
							<div class="col-2 column-shaded-details-flight">
								<span class="text-details-flight">
									31 Mar 22
								</span>
							</div>
						</div>
						<div class="row ms-0 me-0">
							<div class="col-3 column-details-flight">
								<img src="https://i.pinimg.com/originals/9e/c0/70/9ec07079e7a9e68c85ad3498c3af475b.jpg" alt="" class="logo-airline">
								<span class="text-details-flight ps-2">
									United Airlines
								</span>
							</div>
							<div class="col-3 column-details-flight">
								<span class="text-hour-flight">
									09:45
								</span>
								<div class="position-relative ms-2">
									<img class="arrow-flight" src="<?php echo WOOKAPIS_IMG . 'vuelos/arrows-flight.jpg';?>" alt="arrows">
									<span class="text-escala">
										<?php if( count($segment) > 1):?>
										<?php echo (count($segment)-1); ?> escala<?php if( count($segment) > 2):?>s<?php endif; ?>
										<?php else: ?>
											directo
										<?php endif; ?>
									</span>
								</div>
							</div>
							<div class="col-4 column-details-flight">
								<span class="text-hour-flight">
									00:25
								</span>
								<span class="time-flight">
									14h 40 min
								</span>
							</div>
							<div class="col-2 column-details-flight">
								<button type="button"
									class="more-info btn btn-white-yellow btn-center-out"
									data-bs-toggle="modal"
									data-bs-target="">
									+ info
								</button>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-3 col-right-package">
						<div class="col-reservation h-100">
							<div>
								<p class="text-price">Total</p>
								<span class="price-big">
									USD 999
								</span>
								<hr>
								<button class="btn btn-white-yellow btn-center-out" type="submit" data-bs-toggle="modal" data-bs-target="">
									Ver Detalles
								</button>
							</div>
							<div class="mt-2">
								<p class="mb-0">Localizador</p>
								<p class="mb-0">
									<strong>123-456-789</strong>
								</p>
							</div>
						</div>
					</div>
				</div>

				<div class="row mt-3 ms-0 me-0">
					<div class="col-12 col-md-3 img-destacada p-0">
						<div class="content">
							<img class="" src="http://photos.hotelbeds.com/giata/00/006008/006008a_hb_a_033.jpg" alt="destacada">
						</div>
					</div>
					<div class="col-12 col-md-6 detalles-habitacion">
						<div class="name-habitacion">
							<p>INDIVIDUAL STANDARD</p>
						</div>
						<div class="content">
							<p><strong>Incluye:</strong></p>
							<p>+ SOLO HABITACIÓN</p>

							<p class="mt-2"><strong>Políticas de Cancelación</strong>
								<span class="cancellation-policies-notes">
								(Fechas y horas reflejadas según el destino)
								</span>
							</p>
						</div>
					</div>
					<div class="col-12 col-md-3 col-right-package">
						<div class="col-reservation h-100">
							<div>
								<p class="text-price">Total</p>
								<span class="price-big">
									USD 999
								</span>
								<hr>
								<button class="btn btn-white-yellow btn-center-out" type="submit">
									Ver Detalles
								</button>
							</div>
							<div class="mt-2">
								<p class="mb-0">Localizador</p>
								<p class="mb-0">
									<strong>123-456-789</strong>
								</p>
							</div>
						</div>
					</div>
				</div>

				<div class="row mt-3 ms-0 me-0">
					<div class="col-12 col-md-3 img-destacada p-0">
						<div class="content">
							<img class="" src="http://photos.hotelbeds.com/giata/00/006008/006008a_hb_a_033.jpg" alt="destacada">
						</div>
					</div>
					<div class="col-12 col-md-6 detalles-act p-0">
						<div class="p-4">
							<a class="name-act" href="">
								<p class="mt-2 mb-2">Big Bus París - Tour en autobus turístico</p>
							</a>
							<div class="ubicacion">
								<a href="">
									<i class="fa fa-map-marker-alt fa-lg"></i>
									París- France
								</a>
							</div>
							<p class="descrip-act mb-0">
								Déjate envolver por la atmósfera romantica y admira la belleza de París.
							</p>
						</div>
					</div>
					<div class="col-12 col-md-3 col-right-package">
						<div class="col-reservation h-100">
							<div>
								<p class="text-price">Total</p>
								<span class="price-big">
									USD 999
								</span>
								<hr>
								<button class="btn btn-white-yellow btn-center-out" type="submit">
									Ver Detalles
								</button>
							</div>
							<div class="mt-2">
								<p class="mb-0">Localizador</p>
								<p class="mb-0">
									<strong>123-456-789</strong>
								</p>
							</div>
						</div>
					</div>
				</div>

				<div class="row mt-3 ms-0 me-0 apply-coupon">
					<div class="col-12 col-lg-6">
						<i class="fas fa-ticket-alt"></i>
						<span class="cupon-descuento">¡Tengo un cupón de descuento!</span>
					</div>
					<div class="col-12 col-lg-3">
						<input class="form-control" type="text" placeholder="Código del cupón">
					</div>
					<div class="col-12 col-lg-3">
						<button type="submit" id="submit" class="btn btn-rounded-10 btn-white-yellow btn-center-out mt-3 mt-lg-0">
							Aplicar cupón
						</button>
					</div>
				</div>
				<div class="mt-3 items-cart">
					<span>Total de mi compra</span>
				</div>
				<table class="table mt-3">
					<tbody>
						<tr>
							<td colspan="2">Sub Total</td>
							<td>USD 10,444</td>
						</tr>
						<tr>
							<td colspan="2">Descuentos</td>
							<td>USD 50</td>
						</tr>
						<tr>
							<td colspan="2">Total</td>
							<td>USD 10,394</td>
						</tr>
					</tbody>
				</table>
				<div class="mt-2 text-end">
					<button class="btn btn-violet-white btn-center-out" type="submit">
						Finalizar Compra
					</button>
				</div>
			</div>
		</div>
	</div>
</div>

