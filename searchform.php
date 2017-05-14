<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
    <div><input type="text" name="s" id="s" value="Search" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;"/>
        <input type="submit" id="searchsubmit" value="Search" class="btn search-button" />
    </div>
</form>