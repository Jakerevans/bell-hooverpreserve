<?php
/*
Template Name: Property Details Page
Template for http://hooverpres18.zeekeeinteractive.com/3813-river-run-trail/ - https://www.hooverpreserve.com/. This utilizes the Advanced Custom Field plugin and some CSS grid to let the user input a property for sale. 
Could be enhanced by adding a call into an MLS API and auto-fill the ACF fields. 
If client wants to use their own Facebook share image, I'll need their facebook login info to create a custom code snippet.
If they don't like the Gallery creation solution, there's an easier solution for a one-time fee of $25 by purchasing Advanced Custom Fields Pro
Instructional Video: https://www.youtube.com/watch?v=1J_S9iEuf9c&feature=youtu.be
Where should the mortgage button link to?
Could use the MLS api...
What E-mail address should the contact form go to?
*/

get_header();
the_post();

// ACF variables
$price                = get_field( 'price' );
$address1             = get_field( 'address_1' );
$address2             = get_field( 'address_2' );
$propertytype1        = get_field( 'property_type1' );
$propertytype2        = get_field( 'property_type2' );
$beds                 = get_field( 'beds' );
$baths                = get_field( 'baths' );
$halfbath             = get_field( 'half_baths' );
$squarefeet           = get_field( 'square_feet' );
$property_description = get_field( 'property_description' );
$mls_number           = get_field( 'mls_number' );
$county               = get_field( 'county' );
$year_built           = get_field( 'year_built' );
$lot_size             = get_field( 'lot_size' );
$water                = get_field( 'water' );
$construction         = get_field( 'construction' );
$sewer                = get_field( 'sewer' );
$pricepersqft         = get_field( 'pricepersqft' );
$garage               = get_field( 'garage' );
$subdivision          = get_field( 'subdivision' );
$schooldistrict       = get_field( 'school_district' );
$elementaryschool     = get_field( 'elementary' );
$middleschool         = get_field( 'middle' );
$highschool           = get_field( 'high' );
$rooms                = get_field( 'rooms' );
$bedroom_information  = get_field( 'bedroom_information' );
$bathroom_information = get_field( 'bathroom_information' );
$laundry              = get_field( 'laundry' );
$appliances           = get_field( 'appliances' );
$flooring             = get_field( 'flooring' );
$cooling              = get_field( 'cooling' );
$heating              = get_field( 'heating' );
$basement             = get_field( 'basement' );
$fireplaces           = get_field( 'fireplaces' );
$security             = get_field( 'security' );
$add_int_features     = get_field( 'additional_interior_features' );
$parking              = get_field( 'parking' );
$exterior             = get_field( 'exterior' );
$patio                = get_field( 'patio' );
$sprinkler            = get_field( 'sprinkler' );
$pool                 = get_field( 'pool' );
$fence                = get_field( 'fencing' );
$add_ext_features     = get_field( 'additional_exteriorlot_features' );
$agent_photo          = get_field( 'agent_photo' );
$agent_name           = get_field( 'agent_name' );
$agent_email          = get_field( 'agent_email' );
$agent_phone          = get_field( 'agent_phone' );
$agent_phone_link     = str_replace( '(', '', $agent_phone );
$agent_phone_link     = str_replace( ')', '', $agent_phone_link );
$agent_phone_link     = str_replace( '-', '', $agent_phone_link );
$agent_phone_link     = str_replace( ' ', '', $agent_phone_link );
$obj_id = get_queried_object_id();
$current_url = get_permalink( $obj_id );
?>

<div class="jre-propertytemplate-wrap container_inner clearfix">

	<div class="jre-propertytemplate-overviewbar">
		<div class="jre-propertytemplate-overviewbar-inner-wrapper">

			<div class="jre-propertytemplate-overviewbar-entry" id="jre-propertytemplate-overviewbar-price-wrapper">
				<div class="jre-propertytemplate-overviewbar-entry-title" id="jre-propertytemplate-overviewbar-entry-content-pricetext">
					<p>For Sale</p>
				</div>
				<div class="jre-propertytemplate-overviewbar-entry-content" id="jre-propertytemplate-overviewbar-entry-content-price">
					<p><?php echo $price; ?></p>
				</div>
			</div>
			<div class="jre-propertytemplate-overviewbar-entry" id="jre-propertytemplate-overviewbar-address-wrapper">
				<div class="jre-propertytemplate-overviewbar-entry-title">
					<p><?php echo $address1; ?></p>
				</div>
				<div class="jre-propertytemplate-overviewbar-entry-content">
					<p><?php echo $address2; ?></p>
				</div>
			</div>
			<div class="jre-propertytemplate-overviewbar-entry" id="jre-propertytemplate-overviewbar-proptype-wrapper">
				<div class="jre-propertytemplate-overviewbar-entry-title">
					<p><?php echo $propertytype1; ?></p>
				</div>
				<div class="jre-propertytemplate-overviewbar-entry-content">
					<p><?php echo $propertytype2; ?></p>
				</div>
			</div>
			<div class="jre-propertytemplate-overviewbar-entry" id="jre-propertytemplate-overviewbar-beds-wrapper">
				<div class="jre-propertytemplate-overviewbar-entry-title">
					<p><?php echo $beds; ?></p>
				</div>
				<div class="jre-propertytemplate-overviewbar-entry-content">
					<p>Beds</p>
				</div>
			</div>
			<div class="jre-propertytemplate-overviewbar-entry" id="jre-propertytemplate-overviewbar-baths-wrapper">
				<div class="jre-propertytemplate-overviewbar-entry-title">
					<p>
						<?php echo $baths;
						if ( 0 !== $halfbath && null !== $halfbath && '' !== $halfbath) {
							echo '<span id="jre-propertyoverview-halfbath"> + ' . $halfbath . ' half</span>';
						}
						?>
				</div>
				<div class="jre-propertytemplate-overviewbar-entry-content">
					<p>Baths</p>
				</div>
			</div>
			<div class="jre-propertytemplate-overviewbar-entry" id="jre-propertytemplate-overviewbar-squarefeet-wrapper">
				<div class="jre-propertytemplate-overviewbar-entry-title">
					<p><?php echo $squarefeet; ?> Sq. Ft.</p>
				</div>
				<div class="jre-propertytemplate-overviewbar-entry-content">
					<p>Sq. Ft.</p>
				</div>
			</div>

			<div class="fb-share-button" data-href="<?php echo $current_url; ?>" data-layout="button" data-size="small" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $current_url; ?>%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
			
			<!--
			<a href="<?php echo $current_url; ?>" data-image="article-1.jpg" data-title="Article Title" data-desc="Some description for this article" class="btnShare"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
		    -->

		
		</div>
	</div>
	<div class="jre-propertytemplate-left-column">
		<div id="jre-propertytemplate-gallery">
			<?php echo the_content(); ?>
		</div>
		<div class="jre-propertytemplate-belowimages-container" id="jre-propertytemplate-belowimages-description">
				<div class="jre-propertytemplate-belowimages-controls-container">
					<div class="jre-propertytemplate-belowimages-controls-title">
						<p>Description for <?php echo $address1 . ' ' . $address2; ?></p>
					</div>
					<div class="jre-propertytemplate-belowimages-controls-icon">

					</div>
				</div>
				<div class="jre-propertytemplate-belowimages-content-container">
					<div class="jre-propertytemplate-belowimages-content-actual">
						<p><?php echo $property_description ?></p>
					</div>
				</div>
		</div>
		<div class="jre-propertytemplate-belowimages-container" id="jre-propertytemplate-belowimages-details">
				<div class="jre-propertytemplate-belowimages-controls-container">
					<div class="jre-propertytemplate-belowimages-controls-title">
						<p>Property Details</p>
					</div>
					<div class="jre-propertytemplate-belowimages-controls-icon">
						
					</div>
				</div>
				<div class="jre-propertytemplate-belowimages-content-container">
					<div class="jre-propertytemplate-belowimages-content-actual">
						<div class="jre-propertytemplate-belowimages-content-details-wrapper">
							<div class="jre-propertytemplate-belowimages-content-details-col1">
								<p>MLS#</p>

							</div>
							<div class="jre-propertytemplate-belowimages-content-details-col2">
								<p class="jre-propertytemplate-belowimages-content-details-bold"><?php echo $mls_number ?></p>

							</div>
							<div class="jre-propertytemplate-belowimages-content-details-col3">
								<p>Property Type</p>

							</div>
							<div class="jre-propertytemplate-belowimages-content-details-col4">
								<p class="jre-propertytemplate-belowimages-content-details-bold"><?php echo $propertytype1 . ', ' . $propertytype2 ?></p>

							</div>
						</div>
						<div class="jre-propertytemplate-belowimages-content-details-wrapper">

							<div class="jre-propertytemplate-belowimages-content-details-col1">
								<p>Bedrooms</p>
							</div>
							<div class="jre-propertytemplate-belowimages-content-details-col2">
								<p class="jre-propertytemplate-belowimages-content-details-bold"><?php echo $beds ?></p>

							</div>
							<div class="jre-propertytemplate-belowimages-content-details-col3">
								<p>Bathrooms</p>

							</div>
							<div class="jre-propertytemplate-belowimages-content-details-col4">
								<p class="jre-propertytemplate-belowimages-content-details-bold">
									<?php echo $baths;
										if ( 0 !== $halfbath && null !== $halfbath && '' !== $halfbath) {
											echo '<span id="jre-propertyoverview-halfbath"> + ' . $halfbath . ' half</span>';
										}
									?>
								</p>
							</div>
						</div>

						<div class="jre-propertytemplate-belowimages-content-details-wrapper">

							<div class="jre-propertytemplate-belowimages-content-details-col1">
								<p>County</p>
							</div>
							<div class="jre-propertytemplate-belowimages-content-details-col2">
								<p class="jre-propertytemplate-belowimages-content-details-bold"><?php echo $county ?></p>
							</div>
							<div class="jre-propertytemplate-belowimages-content-details-col3">
								<p>Year Built</p>
							</div>
							<div class="jre-propertytemplate-belowimages-content-details-col4">
								<p class="jre-propertytemplate-belowimages-content-details-bold"><?php echo $year_built ?></p>
							</div>
						</div>

						<div class="jre-propertytemplate-belowimages-content-details-wrapper">

							<div class="jre-propertytemplate-belowimages-content-details-col1">
								<p>Lot Size</p>
							</div>
							<div class="jre-propertytemplate-belowimages-content-details-col2">
								<p class="jre-propertytemplate-belowimages-content-details-bold"><?php echo $lot_size ?></p>
							</div>
							<div class="jre-propertytemplate-belowimages-content-details-col3">
								<p>Water</p>
							</div>
							<div class="jre-propertytemplate-belowimages-content-details-col4">
								<p class="jre-propertytemplate-belowimages-content-details-bold"><?php echo $water ?></p>
							</div>
						</div>
						<div class="jre-propertytemplate-belowimages-content-details-wrapper">

							<div class="jre-propertytemplate-belowimages-content-details-col1">
								<p>Construction</p>
							</div>
							<div class="jre-propertytemplate-belowimages-content-details-col2">
								<p class="jre-propertytemplate-belowimages-content-details-bold"><?php echo $construction ?></p>
							</div>
							<div class="jre-propertytemplate-belowimages-content-details-col3">
								<p>Sewer</p>
							</div>
							<div class="jre-propertytemplate-belowimages-content-details-col4">
								<p class="jre-propertytemplate-belowimages-content-details-bold"><?php echo $sewer ?></p>
							</div>
						</div>
						<div class="jre-propertytemplate-belowimages-content-details-wrapper">

							<div class="jre-propertytemplate-belowimages-content-details-col1">
								<p>Square Feet</p>
							</div>
							<div class="jre-propertytemplate-belowimages-content-details-col2">
								<p class="jre-propertytemplate-belowimages-content-details-bold"><?php echo $squarefeet ?> Sq. Ft.</p>
							</div>
							<div class="jre-propertytemplate-belowimages-content-details-col3">
								<p>Price per Sq. Ft.</p>
							</div>
							<div class="jre-propertytemplate-belowimages-content-details-col4">
								<p class="jre-propertytemplate-belowimages-content-details-bold"><?php echo $pricepersqft ?></p>
							</div>
						</div>


						<div class="jre-propertytemplate-belowimages-content-details-wrapper">
							<div class="jre-propertytemplate-belowimages-content-details-col1">
								<p>Garage</p>
							</div>
							<div class="jre-propertytemplate-belowimages-content-details-col2">
								<p class="jre-propertytemplate-belowimages-content-details-bold"><?php echo $garage ?></p>
							</div>
							<div class="jre-propertytemplate-belowimages-content-details-col3">
								<p>Subdivision</p>
							</div>
							<div class="jre-propertytemplate-belowimages-content-details-col4">
								<p class="jre-propertytemplate-belowimages-content-details-bold"><?php echo $subdivision ?></p>
							</div>
						</div>


					</div>
				</div>
				<div class="jre-propertytemplate-belowimages-controls-container">
					<div class="jre-propertytemplate-belowimages-controls-title">
						<p>School Information</p>
					</div>
					<div class="jre-propertytemplate-belowimages-controls-icon">
						
					</div>
				</div>
				<div class="jre-propertytemplate-belowimages-content-container">
					<div class="jre-propertytemplate-belowimages-content-actual">
						<div class="jre-propertytemplate-belowimages-content-details-wrapper">
							<div class="jre-propertytemplate-belowimages-content-details-col1">
								<p>School District</p>
							</div>
							<div class="jre-propertytemplate-belowimages-content-details-col2">
								<p class="jre-propertytemplate-belowimages-content-details-bold"><?php echo $schooldistrict ?></p>
							</div>
							<div class="jre-propertytemplate-belowimages-content-details-col3">
								<p>Elementary School</p>
							</div>
							<div class="jre-propertytemplate-belowimages-content-details-col4">
								<p class="jre-propertytemplate-belowimages-content-details-bold"><?php echo $elementaryschool ?></p>
							</div>
						</div>
						<div class="jre-propertytemplate-belowimages-content-details-wrapper">
							<div class="jre-propertytemplate-belowimages-content-details-col1">
								<p>Middle School</p>
							</div>
							<div class="jre-propertytemplate-belowimages-content-details-col2">
								<p class="jre-propertytemplate-belowimages-content-details-bold"><?php echo $middleschool ?></p>

							</div>
							<div class="jre-propertytemplate-belowimages-content-details-col3">
								<p>High School</p>
							</div>
							<div class="jre-propertytemplate-belowimages-content-details-col4">
								<p class="jre-propertytemplate-belowimages-content-details-bold"><?php echo $highschool ?></p>
							</div>
						</div>
					</div>
				</div>
				<div class="jre-propertytemplate-belowimages-controls-container">
					<div class="jre-propertytemplate-belowimages-controls-title">
						<p>Detailed Room Information</p>
					</div>
					<div class="jre-propertytemplate-belowimages-controls-icon">
						
					</div>
				</div>
				<div class="jre-propertytemplate-belowimages-content-container">
					<div class="jre-propertytemplate-belowimages-content-actual">
						<div class="jre-propertytemplate-belowimages-content-details-2col-wrapper">
							<div class="jre-propertytemplate-belowimages-content-details-2col-col1">
								<p>Rooms</p>
							</div>
							<div class="jre-propertytemplate-belowimages-content-details-2col-col2">
								<p class="jre-propertytemplate-belowimages-content-details-bold"><?php echo $rooms ?></p>
							</div>
						</div>
						<div class="jre-propertytemplate-belowimages-content-details-2col-wrapper">
							<div class="jre-propertytemplate-belowimages-content-details-2col-col1">
								<p>Bedroom(s)</p>
							</div>
							<div class="jre-propertytemplate-belowimages-content-details-2col-col2">
								<p class="jre-propertytemplate-belowimages-content-details-bold"><?php echo $bedroom_information ?></p>

							</div>
						</div>
						<div class="jre-propertytemplate-belowimages-content-details-2col-wrapper">
							<div class="jre-propertytemplate-belowimages-content-details-2col-col1">
								<p>Bath Description</p>
							</div>
							<div class="jre-propertytemplate-belowimages-content-details-2col-col2">
								<p class="jre-propertytemplate-belowimages-content-details-bold"><?php echo $bathroom_information ?></p>

							</div>
						</div>
						<div class="jre-propertytemplate-belowimages-content-details-2col-wrapper">
							<div class="jre-propertytemplate-belowimages-content-details-2col-col1">
								<p>Laundry</p>
							</div>
							<div class="jre-propertytemplate-belowimages-content-details-2col-col2">
								<p class="jre-propertytemplate-belowimages-content-details-bold"><?php echo $laundry ?></p>

							</div>
						</div>
					</div>
				</div>

				<div class="jre-propertytemplate-belowimages-controls-container">
					<div class="jre-propertytemplate-belowimages-controls-title">
						<p>Interior Features</p>
					</div>
					<div class="jre-propertytemplate-belowimages-controls-icon">
						
					</div>
				</div>
				<div class="jre-propertytemplate-belowimages-content-container">
					<div class="jre-propertytemplate-belowimages-content-actual">
						<div class="jre-propertytemplate-belowimages-content-details-2col-wrapper">
							<div class="jre-propertytemplate-belowimages-content-details-2col-col1">
								<p>Appliances</p>
							</div>
							<div class="jre-propertytemplate-belowimages-content-details-2col-col2">
								<p class="jre-propertytemplate-belowimages-content-details-bold"><?php echo $appliances ?></p>
							</div>
						</div>
						<div class="jre-propertytemplate-belowimages-content-details-2col-wrapper">
							<div class="jre-propertytemplate-belowimages-content-details-2col-col1">
								<p>Flooring</p>
							</div>
							<div class="jre-propertytemplate-belowimages-content-details-2col-col2">
								<p class="jre-propertytemplate-belowimages-content-details-bold"><?php echo $flooring ?></p>

							</div>
						</div>
						<div class="jre-propertytemplate-belowimages-content-details-2col-wrapper">
							<div class="jre-propertytemplate-belowimages-content-details-2col-col1">
								<p>Cooling</p>
							</div>
							<div class="jre-propertytemplate-belowimages-content-details-2col-col2">
								<p class="jre-propertytemplate-belowimages-content-details-bold"><?php echo $cooling ?></p>

							</div>
						</div>
						<div class="jre-propertytemplate-belowimages-content-details-2col-wrapper">
							<div class="jre-propertytemplate-belowimages-content-details-2col-col1">
								<p>Heating</p>
							</div>
							<div class="jre-propertytemplate-belowimages-content-details-2col-col2">
								<p class="jre-propertytemplate-belowimages-content-details-bold"><?php echo $heating ?></p>

							</div>
						</div>
						<div class="jre-propertytemplate-belowimages-content-details-2col-wrapper">
							<div class="jre-propertytemplate-belowimages-content-details-2col-col1">
								<p>Basement</p>
							</div>
							<div class="jre-propertytemplate-belowimages-content-details-2col-col2">
								<p class="jre-propertytemplate-belowimages-content-details-bold"><?php echo $basement ?></p>
							</div>
						</div>
						<div class="jre-propertytemplate-belowimages-content-details-2col-wrapper">
							<div class="jre-propertytemplate-belowimages-content-details-2col-col1">
								<p>Fireplaces</p>
							</div>
							<div class="jre-propertytemplate-belowimages-content-details-2col-col2">
								<p class="jre-propertytemplate-belowimages-content-details-bold"><?php echo $fireplaces ?></p>

							</div>
						</div>
						<div class="jre-propertytemplate-belowimages-content-details-2col-wrapper">
							<div class="jre-propertytemplate-belowimages-content-details-2col-col1">
								<p>Security</p>
							</div>
							<div class="jre-propertytemplate-belowimages-content-details-2col-col2">
								<p class="jre-propertytemplate-belowimages-content-details-bold"><?php echo $security ?></p>

							</div>
						</div>
						<div class="jre-propertytemplate-belowimages-content-details-2col-wrapper">
							<div class="jre-propertytemplate-belowimages-content-details-2col-col1">
								<p>Additional Interior Features</p>
							</div>
							<div class="jre-propertytemplate-belowimages-content-details-2col-col2">
								<p class="jre-propertytemplate-belowimages-content-details-bold"><?php echo $add_int_features ?></p>

							</div>
						</div>
					</div>
				</div>
				<div class="jre-propertytemplate-belowimages-controls-container">
					<div class="jre-propertytemplate-belowimages-controls-title">
						<p>Exterior/Lot Features</p>
					</div>
					<div class="jre-propertytemplate-belowimages-controls-icon">
						
					</div>
				</div>
				<div class="jre-propertytemplate-belowimages-content-container">
					<div class="jre-propertytemplate-belowimages-content-actual">
						<div class="jre-propertytemplate-belowimages-content-details-2col-wrapper">
							<div class="jre-propertytemplate-belowimages-content-details-2col-col1">
								<p>Parking</p>
							</div>
							<div class="jre-propertytemplate-belowimages-content-details-2col-col2">
								<p class="jre-propertytemplate-belowimages-content-details-bold"><?php echo $parking ?></p>
							</div>
						</div>
						<div class="jre-propertytemplate-belowimages-content-details-2col-wrapper">
							<div class="jre-propertytemplate-belowimages-content-details-2col-col1">
								<p>Exterior</p>
							</div>
							<div class="jre-propertytemplate-belowimages-content-details-2col-col2">
								<p class="jre-propertytemplate-belowimages-content-details-bold"><?php echo $exterior ?></p>

							</div>
						</div>
						<div class="jre-propertytemplate-belowimages-content-details-2col-wrapper">
							<div class="jre-propertytemplate-belowimages-content-details-2col-col1">
								<p>Patio</p>
							</div>
							<div class="jre-propertytemplate-belowimages-content-details-2col-col2">
								<p class="jre-propertytemplate-belowimages-content-details-bold"><?php echo $patio ?></p>

							</div>
						</div>
						<div class="jre-propertytemplate-belowimages-content-details-2col-wrapper">
							<div class="jre-propertytemplate-belowimages-content-details-2col-col1">
								<p>Sprinkler</p>
							</div>
							<div class="jre-propertytemplate-belowimages-content-details-2col-col2">
								<p class="jre-propertytemplate-belowimages-content-details-bold"><?php echo $sprinkler ?></p>

							</div>
						</div>
						<div class="jre-propertytemplate-belowimages-content-details-2col-wrapper">
							<div class="jre-propertytemplate-belowimages-content-details-2col-col1">
								<p>Pool</p>
							</div>
							<div class="jre-propertytemplate-belowimages-content-details-2col-col2">
								<p class="jre-propertytemplate-belowimages-content-details-bold"><?php echo $pool ?></p>
							</div>
						</div>
						<div class="jre-propertytemplate-belowimages-content-details-2col-wrapper">
							<div class="jre-propertytemplate-belowimages-content-details-2col-col1">
								<p>Fence</p>
							</div>
							<div class="jre-propertytemplate-belowimages-content-details-2col-col2">
								<p class="jre-propertytemplate-belowimages-content-details-bold"><?php echo $fence ?></p>

							</div>
						</div>
						<div class="jre-propertytemplate-belowimages-content-details-2col-wrapper">
							<div class="jre-propertytemplate-belowimages-content-details-2col-col1">
								<p>Additional Exterior/Lot Features</p>
							</div>
							<div class="jre-propertytemplate-belowimages-content-details-2col-col2">
								<p class="jre-propertytemplate-belowimages-content-details-bold"><?php echo $add_ext_features  ?></p>

							</div>
						</div>
					</div>
				</div>
		</div>
    </div>
    <div class="jre-propertytemplate-right-column">
    	<div class="jre-propertytemplate-right-column-agent-details">
	    	<p id="jre-propertytemplate-right-column-agent-details-title">Agent Details</p>
	    	<img src="<?php echo $agent_photo; ?>"/>
	    	<p id="jre-propertytemplate-right-column-agent-details-name"><?php echo $agent_name; ?></p>
	    	<p id="jre-propertytemplate-right-column-agent-details-email"><a href="mailto:<?php echo $agent_email; ?>"><?php echo $agent_email; ?></a></p>
	    	<p id="jre-propertytemplate-right-column-agent-details-phone"><a href="tel:<?php echo $agent_phone_link; ?>"><?php echo $agent_phone; ?></a></p>
	    	<p id="jre-propertytemplate-right-column-contact-us">Contact Us</p>
	    	<p id="jre-propertytemplate-right-column-contact-div"><?php echo do_shortcode( '[contact-form-7 id="135" title="Contact Us"]' ); ?></p>
	    	<p>
	    		<div id="jre-propertytemplate-right-column-mortgage-div">
	    			<a href="">Calculate Your Mortgage</a>
	    		</div>
	    	</p>
    	</div>
    </div>

	
</div>

<!--
<script>
window.fbAsyncInit = function(){
FB.init({
    appId: '170855319634692', status: true, cookie: true, xfbml: true }); 
};
(function(d, debug){var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
    if(d.getElementById(id)) {return;}
    js = d.createElement('script'); js.id = id; 
    js.async = true;js.src = "//connect.facebook.net/en_US/all" + (debug ? "/debug" : "") + ".js";
    ref.parentNode.insertBefore(js, ref);}(document, /*debug*/ false));
function postToFeed(title, desc, url, image){
var obj = {method: 'feed',link: url, picture: 'http://www.url.com/images/'+image,name: title,description: desc};
function callback(response){}
FB.ui(obj, callback);
}

jQuery('.btnShare').click(function(){
elem = $(this);
postToFeed(elem.data('title'), elem.data('desc'), elem.prop('href'), elem.data('image'));

return false;
});
</script>
-->

<div id="fb-root"></div>
<script async defer src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2&appId=170855319634692&autoLogAppEvents=1"></script>

<?php get_footer(); ?>

<style>
.jre-propertytemplate-wrap{
	position: relative;
	top: 150px;
	padding-bottom:150px;
    display: grid;
  	grid-template-columns: 25% 25% 25% 25%;
  	grid-template-rows: auto;
  	grid-template-areas: 
    "overviewbar overviewbar overviewbar overviewbar"
    "leftcolumn leftcolumn leftcolumn rightcolumn";
}

.jre-propertytemplate-overviewbar{
	grid-area: overviewbar;
    padding-top: 10px;
    padding-bottom: 10px;
    margin-bottom: 10px;
    border-bottom: #ccc 1px solid;
}

.jre-propertytemplate-left-column{
	grid-area: leftcolumn;
	margin-right:30px;
	margin-bottom:100px;
}

.jre-propertytemplate-right-column{
	grid-area: rightcolumn;
}

.jre-propertytemplate-overviewbar-entry{
	display: inline-block;
    text-align: center;
    width: 15%;
    vertical-align:top;
}

.jre-propertytemplate-overviewbar-inner-wrapper{
	text-align:center;
}

.jre-propertytemplate-overviewbar-inner-wrapper .fa{
    font-size: 35px;
}

.jre-propertytemplate-overviewbar-entry-title p, .jre-propertytemplate-belowimages-content-details-bold{
	font-weight:bold;
}

.jre-propertytemplate-belowimages-content-details-wrapper{
	position: relative;
    display: grid;
  	grid-template-columns: 25% 25% 25% 25%;
  	grid-template-rows: auto;
  	grid-template-areas: 
    "detailscol1 detailscol2 detailscol3 detailscol4";
}

.jre-propertytemplate-belowimages-content-details-title{
	grid-area: detailstitle;
}

.jre-propertytemplate-belowimages-content-details-col1{
	grid-area: detailscol1;
}

.jre-propertytemplate-belowimages-content-details-col2{
	grid-area: detailscol2;
}

.jre-propertytemplate-belowimages-content-details-col3{
	grid-area: detailscol3;
}

.jre-propertytemplate-belowimages-content-details-col4{
	grid-area: detailscol4;
}

.jre-propertytemplate-belowimages-controls-container{
	margin-top: 30px;
}

.jre-propertytemplate-belowimages-content-details-2col-wrapper{
	position: relative;
    display: grid;
  	grid-template-columns: 25% 75%;
  	grid-template-rows: auto;
  	grid-template-areas: 
    "detailscol1 detailscol2";
}

.jre-propertytemplate-belowimages-content-details-title{
	grid-area: detailstitle;
}

.jre-propertytemplate-belowimages-content-details-2col-col1{
	grid-area: detailscol1;
}

.jre-propertytemplate-belowimages-content-details--2col-col2{
	grid-area: detailscol2;
}


#jre-propertytemplate-overviewbar-entry-content-pricetext{
	background-color: #71a300;
    color: white;
    width: 100px;
    display: inline-block;
}

#jre-propertytemplate-overviewbar-entry-content-pricetext p{
	color:white;
}

#jre-propertytemplate-overviewbar-entry-content-price p{
	font-size:1.5em;
}

#jre-propertytemplate-overviewbar-entry-content-price{
	margin-top:8px;
}

.jre-propertytemplate-belowimages-controls-title p{
    color: #669900;
    font-size: 1.5em;
    line-height: 32px;
    font-style: normal;
    font-weight: 400;
    letter-spacing: 0px;
    text-transform: none;
    font-family: 'Playfair Display', sans-serif;
    border: solid 1px #669900;
    border-left: 0;
    border-right: 0;
    border-top: 0px;
    margin-bottom: 5px;
}

.jre-propertytemplate-belowimages-content-details-col1 p:after {
  border-bottom: 1px dotted black;
  content: '';
  flex: 1;
}

#jre-propertytemplate-right-column-mortgage-div a{
    display: block;
    padding: 30px;
    color: white;
    font-size: 1.5em;
}

#jre-propertytemplate-right-column-mortgage-div{
	text-align: center;
    background-color: #477000;
    margin-bottom:50px;
}

#jre-propertytemplate-right-column-mortgage-div p a{
	color:white;
	padding: 40px;
    background-color: #477000;
}

.jre-propertytemplate-right-column-agent-details .wpcf7 input[type="submit"]{
	background-color: #477000;
}

#jre-propertytemplate-right-column-agent-details-title, #jre-propertytemplate-right-column-contact-us{
	color: #71a300;
    font-size: 1.5em;
    margin-bottom: 10px;
    font-family: 'Playfair Display', sans-serif;
    border: solid 1px black;
    border-left: 0;
    border-right: 0;
    border-top: 0;
    border-color: #71a300;
}

#jre-propertytemplate-right-column-agent-details-name{
    font-weight: bold;
    color: #71a300;
    font-size: 1.2em;
    font-family: 'Playfair Display', sans-serif;
}

#jre-propertytemplate-right-column-contact-us{
	margin-top:40px;
}

#jre-propertytemplate-right-column-agent-details-phone, #jre-propertytemplate-right-column-agent-details-email{
    font-weight: bold;
    color: #71a300;
    font-family: 'Playfair Display', sans-serif;
}

.jre-propertytemplate-right-column-agent-details .wpcf7{
	background-color: #eee;
    padding: 10px;
    position: relative;
    border: solid 1px #ddd;
    margin-bottom:40px;
}

@media screen and ( max-width: 1000px ){
	.jre-propertytemplate-wrap{
		display:block;
	}
}

@media screen and ( max-width: 800px ){

	.qode_image_gallery_no_space.highlight_active ul li{
		margin-bottom: 20px;
	}

	#jre-propertytemplate-gallery .vc_row-fluid{
		text-align: center;
    	margin-left: auto;
    	width: 100%;
	}

	.jre-propertytemplate-belowimages-controls-title p, #jre-propertytemplate-right-column-agent-details-title, #jre-propertytemplate-right-column-contact-us{
		text-align:center;
	}

	.jre-propertytemplate-wrap{
		top:0;
	}

	.jre-propertytemplate-belowimages-content-details-wrapper{
		position: relative;
	    display: grid;
	  	grid-template-columns: 50% 50%;
	  	grid-template-rows: auto;
	  	grid-template-areas: 
	    "detailstitle detailstitle"
    	"detailscol1 detailscol2"
    	"detailscol3 detailscol4";
	}

	.jre-propertytemplate-belowimages-content-details-2col-wrapper{
		position: relative;
	    display: grid;
	  	grid-template-columns: 50% 50%;
	  	grid-template-rows: auto;
	  	grid-template-areas: 
	    "detailscol1 detailscol2";
	}

	.jre-propertytemplate-overviewbar-entry{
		display:block;
	}

	.jre-propertytemplate-overviewbar-entry{
	    width: 100%;
	    margin-bottom:20px;
	    margin-top:20px;
	}

	.jre-propertytemplate-belowimages-content-details-title{
		grid-area: detailstitle;
	}

	.jre-propertytemplate-belowimages-content-details-col1{
		grid-area: detailscol1;
	}

	.jre-propertytemplate-belowimages-content-details-col2{
		grid-area: detailscol2;
	}

	.jre-propertytemplate-belowimages-content-details-col3{
		grid-area: detailscol3;
	}

	.jre-propertytemplate-belowimages-content-details-col4{
		grid-area: detailscol4;
	}
}	
</style>
