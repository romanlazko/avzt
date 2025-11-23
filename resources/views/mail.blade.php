<h1>
    Новый запрос с сайта
</h1>
<p>
    Jmeno: {{ request()->client_name }}
</p>
<p>
    Telefoni cislo: {{ request()->client_phone }}
</p>
<p>
    Email: {{ request()->client_email }}</p>
<p>
    Dotaz: {{ request()->client_comment }}
</p>
    
