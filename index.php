<div class="infinite-marquee">
    <div class="marquee-content">
        <label style="color:#fff; font-weight: 500; font-size:25px;">
            〰 ***** ‘Spooky, fun, challenging’ Luisa, Google Review 〰 ***** ‘Spooky, fun, challenging’ Luisa, Google Review 〰 ****** ‘Fun and scary escape room’ Mark,Tripadvisor
        </label>
    </div>
    <div class="marquee-content" aria-hidden="true">
        <label style="color:#fff; font-weight: 500; font-size:25px;">
            〰 ***** ‘Spooky, fun, challenging’ Luisa, Google Review 〰 ***** ‘Spooky, fun, challenging’ Luisa, Google Review 〰 ****** ‘Fun and scary escape room’ Mark,Tripadvisor
        </label>
    </div>
</div>

<style>
.infinite-marquee {
    width: 100%;
    overflow: hidden;
    display: flex;
    white-space: nowrap;
    box-sizing: border-box;
    background: transparent; /* Change as needed */
}

.marquee-content {
    display: inline-block;
    animation: marquee 30s linear infinite;
    padding-right: 10px; /* Adjust spacing between copies */
}

.marquee-content label {
    display: inline-block;
    padding-right: 50px; /* Adjust spacing between items */
}

@keyframes marquee {
    0% {
        transform: translateX(0);
    }
    100% {
        transform: translateX(-50%);
    }
}
</style>