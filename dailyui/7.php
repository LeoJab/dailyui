<?php $prompt="Prompt: Settings" ?>

<link rel="stylesheet" href="ASSET/css/dailyUi/7.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Radio+Canada:ital,wght@0,300..700;1,300..700&display=swap" rel="stylesheet">

<div id="all7">
    <div class="mobile">
        <div class="header">
            <div class="top">
                <p>12:00</p>
                <div class="icons">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-signal-high"><path d="M2 20h.01"/><path d="M7 20v-4"/><path d="M12 20v-8"/><path d="M17 20V8"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-wifi"><path d="M12 20h.01"/><path d="M2 8.82a15 15 0 0 1 20 0"/><path d="M5 12.859a10 10 0 0 1 14 0"/><path d="M8.5 16.429a5 5 0 0 1 7 0"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-battery-medium"><rect width="16" height="10" x="2" y="7" rx="2" ry="2"/><line x1="22" x2="22" y1="11" y2="13"/><line x1="6" x2="6" y1="11" y2="13"/><line x1="10" x2="10" y1="11" y2="13"/></svg>
                </div>
            </div>
            <div class="backMenu">
                <div class="back">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-left"><path d="m15 18-6-6 6-6"/></svg>
                    <p>back</p>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-align-justify"><line x1="3" x2="21" y1="6" y2="6"/><line x1="3" x2="21" y1="12" y2="12"/><line x1="3" x2="21" y1="18" y2="18"/></svg>
            </div>
        </div>
        <img class="photoProfile" src="ASSET/img/dailyUi/6/photoProfile.jpg" alt="Photo de profile">
        <div class="editInfo">
            <h1>Edit Informations</h1>
            <form action="#">
                <label for="firstName">FirstName</label>
                <input type="text" name="firstName" value="Devon">
                <label for="lastName">LastName</label>
                <input type="text" name="lastName" value="Lane">
                <label for="email">Email</label>
                <input type="text" name="email" value="devon.lane@email.com">
                <button type="submit">Edit</button>
            </form>
        </div>
        <div class="changePassword">
            <h1>Change Password</h1>
            <form action="#">
                <label for="currentPassword">Current Password</label>
                <input type="password" name="currentPassword">
                <label for="newPassword">New Password</label>
                <input type="password" name="newPassword">
                <label for="confirmNewPassword">Confirm new Password</label>
                <input type="password" name="confirmNewPassword">
                <button type="submit">Change Password</button>
            </form>
        </div>
    </div>
</div>