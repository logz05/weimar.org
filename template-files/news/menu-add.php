{exp:safecracker channel="cafeteria-menu" return="news/menu-add/ENTRY_ID" entry_id="{segment_3}"}

		<label for="title">Title</label>
		<input type="text" name="title" id="title" value="{title}" size="50" maxlength="100" onkeyup="liveUrlTitle();" />

		<label for="url_title">URL Title</label>
		<input type="text" name="url_title" id="url_title" value="{url_title}" maxlength="75" size="50" />

		<label for="entry_date">Date</label>
		<input type="text" name="entry_date" id="entry_date" value="{entry_date}" maxlength="23" size="25" />

		
		<label for="my_field_name">Your Custom Field</label>
		<input type="text" name="my_field_name" id="my_field_name" value="{my_field_name}" />

		
		<label for="my_field_name">Your Custom Field (a field with options)</label>
		<select name="my_field_name">
			{options:my_field_name}
			<option value="{option_value}"{selected}>{option_name}</option>
			{/options:my_field_name}

		</select>
		
		<label for="my_field_name">Your 3rd Party WYSIWYG Field</label>
		{field:my_field_name}
		
		<input type="submit" name="submit" value="Submit" />

	{/exp:safecracker}