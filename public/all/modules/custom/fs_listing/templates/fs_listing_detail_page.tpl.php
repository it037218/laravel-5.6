
        <div class="divider-directory hidden" style='background-image: url("<?php print variable_get("path_theme");?>/images/family_style/divider_directory.png")'  >
            <div class="wrapper-details">
                <a href="/shanghai/directory">
                    <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
                    Back to Directory
                </a>
            </div>
        </div>
        <div class="directory-wrapper row">
            <div class="col-xs-12 main-details-image"><img src="<?php print $item['field_main_image']; ?>" class="img-responsive" /></div>
                     <div class="panel_details col-xs-12">
                <div class="wrapper-details-new col-xs-12">
                    <div class="col-xs-12 title_details">Information</div>
                    <div class="col-xs-12 main_details">
                      <?php if($item['title']):?>
                          <div class="col-xs-12 item_details">
                              <div class="col-xs-3 item_title">Name</div>
                              <div class="col-xs-9 item_content"><?php print $item['title']; ?></div>
                          </div>
                      <?php endif;?>
                        <?php if($item['field_operating_hours']):?>
                              <div class="col-xs-12 item_details">
                            <div class="col-xs-3 item_title">Time</div>
                            <div class="col-xs-9 item_content"> <?php print $item['field_operating_hours']; ?></div>
                        </div>
                          <?php endif;?>
                         <?php if($item['field_address_in_english']):?>
                        <div class="col-xs-12 item_details">
                            <div class="col-xs-3 item_title">Address</div>
                             <div class="col-xs-9 item_content"><?php print $item['field_address_in_english']; ?></div>
                        </div>
                               <?php endif;?>
                         <?php if($item['field_address_in_chinese']):?>
                        <div class="col-xs-12 item_details">
                            <div class="col-xs-3 item_title">Address in Chinese</div>
                             <div class="col-xs-9 item_content"><?php print $item['field_address_in_chinese']; ?></div>
                        </div>
                               <?php endif;?>
                         <?php if($item['field_nearest_metro_station']):?>
                        <div class="col-xs-12 item_details">
                            <div class="col-xs-3 item_title">Nearest Metro Station</div>
                             <div class="col-xs-9 item_content"><?php print $item['field_nearest_metro_station']; ?></div>
                        </div>
                         <?php endif;?>
                        <?php if($item['field_price']):?>
                            <div class="col-xs-12 item_details">
                            <div class="col-xs-3 item_title">Price Range</div>
                             <div class="col-xs-9 item_content"><?php print $item['field_price']; ?></div>
                        </div>
                               <?php endif;?>
                        <?php if($item['body']):?>
                        <div class="col-xs-12 item_details">
                            <div class="col-xs-3 item_title">Description</div>
                            <div class="col-xs-9 item_content">
                              <?php print $item['body']; ?>
                            </div>
                        </div>
                        <?php endif;?>
                      <?php if($item['field_email']):?>
                          <div class="col-xs-12 item_details">
                              <div class="col-xs-3 item_title">E-mail</div>
                              <div class="col-xs-9 item_content"> <?php print $item['field_email']; ?></div>
                          </div>
                      <?php endif;?>
                      <?php if($item['field_website']):?>
                          <div class="col-xs-12 item_details">
                              <div class="col-xs-3 item_title">Web Site</div>
                              <div class="col-xs-9 item_content">      <a href="<?php print $item['field_website']; ?>"> <?php print $item['field_website']; ?></a>
                              </div>
                          </div>
                      <?php endif;?>
                      <?php if($item['field_telephone']):?>
                          <div class="col-xs-12 item_details">
                              <div class="col-xs-3 item_title">Phone number</div>
                              <div class="col-xs-9 item_content">
                                <?php print $item['field_telephone']; ?>
                              </div>
                          </div>
                      <?php endif;?>
                      <?php if($item['field_wechat']):?>
                          <div class="col-xs-12 item_details">
                              <div class="col-xs-3 item_title">Wechat</div>
                              <div class="col-xs-9 item_content">
                                <?php print $item['field_wechat']; ?>
                              </div>
                          </div>
                      <?php endif;?>
                    </div>
                </div>

            </div>
            <div class="col-xs-12 title-details"><span>Map</span>
              <div class="underline_directory"></div>
            </div>
            <div class="col-xs-12 map-location">
                   <div id="map-content" style="height:300px"></div>
            </div>


        </div>
