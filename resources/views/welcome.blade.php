@extends('layouts.main')
@section('mainContent')

<h1 class="pageTitle">
  3WireCMS
  <br /><span class='filteredBy'> A Blogging CMS built with Laravel </span>
</h1>

<img class="homeImage" src="https://github.com/mthomps4/3WireCMS/blob/master/codesnips/3WireCMS-BlogPost.PNG?raw=true" alt="Blog Post Image">
<div>
<h4 class="homeSubTitle">Post Content</h4>
<p>Blog Posts include by default a Title, Featured Image, Author, and a Post Body. The Post Body is setup to receive HTML via decoding allowing for more images, giphy fun, and any custom styles you wish to add directly.Moving forward the Post Body will be setup via GUI control, and a Image Uploader for Featured Image.</p>
</div>

<div >
<h4 class="homeSubTitle">Comments</h4>
<p>Comments are open and added as "Guests". Each comment simply asks for a name and comment. Moving forward I will look to add a "guest" login via other providers for quick name and avatar image access.</p>
</div>

<div>
<h4 class="homeSubTitle">Dashboard</h4>
<p>The Admin user is meant to be setup manually. If running locally there is a "Dummy Admin" supplied for testing. The dashboard is setup as a simple hub with Date Functions supplying the Edit and Delete buttons dynamically. Moving forward I will add more filters and ways to search for the blog post in question. (Title, Date Range, Tags, Categories, etc)</p>
</div>

  <img class="homeImage" src="https://github.com/mthomps4/3WireCMS/blob/master/codesnips/3WireCMS-dashboard.PNG?raw=true" alt="Dashboard Image">



{{-- _____
### ToDo

#### Next Steps
- [ ] GUI Control For Posts
- [ ] Drag and Drop Image Uploader
- [ ] Testing for unknowns/oversights
- [ ] More Dashboard filters added
- [ ] Avatar Guest SignIn

#### Admin Area
- [x] Admin Login
- [x] Session Variables
- [x] Reroutes - Auth:Routs
- [x] CRUD Scaffold - Admin Only
- [ ] Post Body GUI Edit tinymce (Looking into custom options for blog post styling)

#### Posts Have
- [x] Title
- [x] Post Body
- [x] Featured Image -> URL String
- [x] Timestamps
- [x] Author Name -> Admin Name
- [x] Comments -> GuestName - Comment
- [x] Tags (ManyToMany)
- [x] Categories (ManyToMany)

#### Styles - Prototype Styles
- [x] Add Main Page Content
- [x] Blog Page Styles
- [x] Single Post Styles
- [x] Dashboard Styles --}}

@stop
