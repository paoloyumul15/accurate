<aside class="Sidebar">
    <section>
        <ul class="Sidebar__menu">
            <li><router-link to="/" exact>Dashboard</router-link></li>
        </ul>
    </section>
    <section>
        <p class="Sidebar__category">Sales</p>
        <ul class="Sidebar__menu">
            <li><router-link to="/sales-orders" exact>Sales Orders</router-link></li>
            <li><router-link to="/sales-invoices" exact>Invoices</router-link></li>
            <li><router-link to="/customers" exact>Customers</router-link></li>
        </ul>
    </section>
    <section>
        <p class="Sidebar__category">Purchases</p>
        <ul class="Sidebar__menu">
            <li><router-link to="/purchase-orders" exact>Purchase Orders</router-link></li>
            <li><router-link to="/bills" exact>Invoices</router-link></li>
            <li><router-link to="/vendors" exact>Vendors</router-link></li>
        </ul>
    </section>
    <section>
        <p class="Sidebar__category">Accounting</p>
        <ul class="Sidebar__menu">
            <li><router-link to="/chart-of-accounts" exact>Chart of Accounts</router-link></li>
        </ul>
    </section>
</aside>
