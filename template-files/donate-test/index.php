{embed="includes/_doc-header" title="Donate"}
{preload_replace:section="Donate"}
{!-- DELETE A PRODUCT --}
{if segment_2=="delete"}
{!-- The delete_from_cart tag deletes items. 
  In this case it is only called if segment_2 is "delete"
  if used on a page with other tags, place it towards the top of the page. 
   --}
  {exp:cartthrob:delete_from_cart delete_all="yes" row_id="{segment_3}"}
{/if}
<div id="content-sub" class="rounded">
<div id="sb_sdw"></div>
  <div id="sidebar">
    <h3><a href="/donate/">{section}</a></h3>
    <ul id="sb-menu">
    </ul>
  </div><!-- END #sidebar -->
  <div id="section-head">
    <div id="section-head-img" style="background-image:url({exp:channel:entries channel='donate' entry_id='722' }{head_img}{/exp:channel:entries})"></div>
  </div>
  <div id="page-data">

{!-- ORDER COMPLETE MESSAGES --}
  {!-- The "return" paramater of the checkout form below is set back to this page with "order_complete" in the URL. 
    This saves creating a template specifically to handle order info. --}
  {if segment_2=="order_complete"}
    {!-- the submitted_order_info tag returns information from the last attempted order. --}
    {exp:cartthrob:submitted_order_info}

        {if authorized}
          Your transaction is complete!<br />
              Transaction ID: {transaction_id}<br />
              Your total: {cart_total}<br />
              Your order ID: {order_id}
          {if:elseif declined}
              Your credit card was declined: {error_message}
          {if:elseif failed}
              Your payment failed: {error_message}
          {/if}

    {/exp:cartthrob:submitted_order_info}
  {/if}

  {!-- ADD A PRODUCT --}

{if segment_2==""}

  <h2>Make a Donation</h2>
  {exp:cartthrob:add_to_cart_form 
      return="donate-test/confirm" 
    allow_user_price="yes"
    title="Donation"
    no_shipping="yes"
    no_tax="yes"
      on_the_fly="true"  
    }
    <p>
      
      Donation Amount:  $<input type="text" maxlength="7" size="5" name="price"> 
      {!-- Adding a personal_message to the donation. No field called personal_message exists,
        but if you are using the "Cartthrob Order Items" custom field type in your Orders Weblog… 
        this message will still be dynamically added to the order data. 
        See the add_to_cart_form for more details
         --}
      Donation Note: {item_options:radio:personal_message value="test" }<br />
    </p>
      <input type="submit" value="Submit" />
  {/exp:cartthrob:add_to_cart_form}

{/if}

  {!-- VIEW CART CONTENTS / UPDATE QUANTITIES --}

{if segment_2=="confirm"}
    <h1>Confirm Donation</h1>
    
  {!-- cart_items_info outputs information about your current cart, including products in the cart, weight, and prices. --}
  {exp:cartthrob:cart_items_info}
    {if no_results}
    <p>Your donation is empty</p>
    <a href="/donate/">Donate</a>
    {/if}
    {!-- outputting data that's only applicable for the first item. --}
    {if first_row}
      <h2>Thank You.</h2>
      <p>Thank you for your donation commitment, please pay for your donation now.</p>
    {/if}
    <p>Title: {title} <br />

      Personal Message: {item_options:personal_message}<br />

        {item_price}<br>

      {!-- The delete URL links back to this page. 
      The segments activate the delete_from_cart tag at the top of this template.--}
      <a href="{path=donate-test/remove-donation/{row_id}}">Delete</a><br />
      </p>
    
    {if last_row}
      {!-- these are just some of the variables available within the cart_items_info tag --}
      <p><strong>Total: {cart_total}</strong></p>
    {/if}
  {/exp:cartthrob:cart_items_info}

{exp:cartthrob:cart_empty_redirect  return="donate-test/donation-empty"  }

  {!-- CHECKOUT --}
  <h2>Checkout</h2>
  {!-- the checkout_form  outputs a checkout form--}
  {!-- overriding the chosen gateway with the the dev_template gateway here --}
  {exp:cartthrob:checkout_form gateway="authorize_net" return="donate-test/order_complete"}
    {!-- The gateway_fields template variable to output fields required by your currently selected gateway 
      what you see on the front end changes based on the gateway's requirements.--}
    {gateway_fields}
    <input type="submit" value="Checkout" />
  {/exp:cartthrob:checkout_form}

{/if}

  </div>
  <div class="clear"></div>
</div>
{embed="includes/_doc-footer"}