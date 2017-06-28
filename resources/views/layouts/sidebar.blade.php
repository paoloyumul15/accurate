<aside class="Sidebar">
    <section>
        <ul class="Sidebar__menu">
            <router-link to="/" tag="li" exact>
                <a><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </router-link>
        </ul>
    </section>
    <section>
        <p class="Sidebar__category">Sales</p>
        <ul class="Sidebar__menu">
            <router-link to="/sales-orders" tag="li" exact>
                <a><i class="fa fa-circle-o fa-fw"></i> Sales Orders</a>
            </router-link>
            <router-link to="/sales-invoices" tag="li" exact>
                <a><i class="fa fa-circle-o fa-fw"></i> Invoices</a>
            </router-link>
            <router-link to="/customers" tag="li" exact>
                <a><i class="fa fa-users fa-fw"></i> Customers</a>
            </router-link>
        </ul>
    </section>
    <section>
        <p class="Sidebar__category">Purchases</p>
        <ul class="Sidebar__menu">
            <router-link to="/purchase-orders" tag="li" exact>
                <a><i class="fa fa-circle-o fa-fw"></i> Purchase Orders</a>
            </router-link>
            <router-link to="/bills" tag="li" exact>
                <a><i class="fa fa-circle-o fa-fw"></i> Invoices</a>
            </router-link>
            <router-link to="/vendors" tag="li" exact>
                <a><i class="fa fa-circle-o fa-fw"></i> Vendors</a>
            </router-link>
        </ul>
    </section>
    <section>
        <p class="Sidebar__category">Accounting</p>
        <ul class="Sidebar__menu">
            <router-link to="/chart-of-accounts" tag="li" exact>
                <a><i class="fa fa-circle-o fa-fw"></i> Chart of Accounts</a>
            </router-link>
        </ul>
    </section>
</aside>
