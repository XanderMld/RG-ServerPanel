{% extends "base.tpl" %}

{% block content %}
<table class="chars">
	<thead>
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th class="narrow">Status</th>
		</tr>
	</thead>
	<tbody>
		{% for user in users %}
		<tr>
			<td>{{user.id}}</td>
			<td>{{user.username}}</td>
			<td class="narrow">{{user.online|online}}|{{user.locked|locked}}</td>
		</tr>
		{% endfor %}
	</tbody>
</table>
{% endblock %}