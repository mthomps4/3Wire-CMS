#3WireCMS
A custom blog built with Laravel
TODO:

### Post
- Title (String)
- Post Body (Looking into tinyMCE or other)
- Post Feature Image (String) -- URL TO IMG
- Date -
- Author (Pulled from Admin author_name)

Has
- Comments - Many to One
- Tags - Many to Many
- Category - One to Many

### Comments
Many to One
- User_Name (String)
- Comment_Body (String)

### Tags
Many to Many
- Tag (String)
- Comma delimited ?

### Category
One to Many
- Category (String)

- Category (Development, Woodworking, Day-In-The-Life, Other)
- Tags (#Handtools, #JavaScript, #Hashtag ...)
- For other Blogs/Resources -- (Separate Page?)
