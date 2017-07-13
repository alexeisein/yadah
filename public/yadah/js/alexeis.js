function slugBlog() {
	var title = document.getElementById('title');
	var slug = document.getElementById('slug');

	title.value = title.value.toUpperCase();

	slug.value = title.value.toLowerCase().replace(/\s+/g,'-');
}

function slugCatTag() {
	var name = document.getElementById('name');
	var slug = document.getElementById('slug');

	name.value = name.value.toUpperCase();

	slug.value = name.value.toLowerCase().replace(/\s+/g,'-');
}