<div className="container-nav">
            <input type="text" placeholder="Search..." />
            <ul className="links-nav">
                <Link className="link" to="/home"><li className="link-nav"><img className="active-link" src={homeBtn} alt="home btn"/><a href="index.php">Home</a></li></Link>
                <li className="link-nav"><img src={explorerBtn} alt="explorer btn"/><a href="publish-post.php">Publier</a></li>
                <li className="link-nav"><img src={friendsBtn} alt="friends btn"/><a href="my-posts.php">Mes questions</a></li>
                <li className="link-nav"><img src={gamesBtn} alt="games btn"/>Games</li>
            </ul>
            <div className="section-nav-right">
                <ul className="actions-nav">
                    <li className="action-nav"><img src={btnMessages} alt="messages button"/></li>
                    <li className="action-nav"><img src={btnNotification} alt="notifications button"/></li>
                </ul>
                <div className="user-nav">
                    <img src={userImg} alt="user img" />
                    <p className="name-user-nav">User</p>
                    <img className="arrow-down-nav" src={arrowDown} alt="arrow down" />
                </div>

                <div className="menu-nav">
                    <a href="actions/users/logoutAction.php">Logout</a>
                </div>
            </div>
</div>
