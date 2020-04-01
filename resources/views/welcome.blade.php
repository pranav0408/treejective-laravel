@extends('layout.main')

@section('content')

<div class="overlay"></div>
    <div class="abstract-1"></div>
    <div class="abstract-2"></div>
    <div class="abstract-3"></div>
    <nav>
        <span id="nav-brand">
            <a href="/">Treejective</a>
        </span>
        <ul class="nav-item">
            <li> 
                @if( Session::get('user') )
                    <a href='/logout'> <button id="session"> Logout </button> </a>
                @else
                    <a href='/signup'> <button id="session"> Login/Signup </button> </a>
                @endif  
            </li>
            @if( Session::get('user') )
               <a href="/profile/view">
                    <li id="hamburger">
                        <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M33.5094 0H3.49057C1.56278 0 0 1.56278 0 3.49057V33.5094C0 35.4372 1.56278 37 3.49057 37H33.5094C35.4372 37 37 35.4372 37 33.5094V3.49057C37 1.56278 35.4372 0 33.5094 0Z" fill="#80BEA0"/>
                            <path d="M31.4151 30.0189V28.6429C31.4151 28.2568 31.1869 27.9113 30.8421 27.7744C26.7961 26.1653 22.3046 24.1673 21.9271 22.9226V21.6164C22.7664 20.7326 23.4284 19.5004 23.8203 18.0574C24.7615 17.3774 24.9956 15.9756 24.2164 14.9892V12.0655C24.2164 9.04756 22.5833 6.98114 18.8495 6.98114C15.2121 6.98114 13.4806 9.04756 13.4806 12.0655V14.9899C12.7032 15.9749 12.9367 17.376 13.8768 18.0567C14.2685 19.5004 14.931 20.7326 15.7709 21.6164V22.9219C15.3944 24.1659 10.9019 26.1639 6.85603 27.7737C6.51123 27.912 6.28302 28.2568 6.28302 28.6429V30.0189" stroke="white" stroke-width="2"/>
                        </svg>
                    </li>
               </a>
            @endif
        </ul>
    </nav>

   <div class="banner">
        <div class="left-banner">
            <div class="content" align="center">
                <b>
                    <span class="normal">Your</span> <span class="big">Tree</span> <br>
                                        <span class="small">&</span> <br>
                    <span class="small">Our</span> <span class="big">Information</span> 
                    <br><br><br>
                    <span class="small text">Know all about plants</span>
                </b>
            </div>
        </div>
        <div class="right-banner">
            <div id="svg-arrow-1">
                <svg width="213" height="207" viewBox="0 0 213 207" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="path-1" d="M77.4433 65C41.6099 72.1667 -21.4567 95.1 12.9433 129.5C47.3433 163.9 39.2766 193.167 30.9433 203.5" stroke="#80BEA0" stroke-width="5"/>
                    <path class="path-arrow-1" d="M12.5675 168.997C22.0149 176.155 25.3435 190.728 28.4835 201.718C30.3201 208.146 42.5 198 42.5 198C46 196 55.5 187 55 183" stroke="#80BEA0" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M92.48 8.464C93.2907 7.93067 94.176 7.536 95.136 7.28C96.096 7.024 97.0453 6.896 97.984 6.896C98.9227 6.896 99.7973 6.96 100.608 7.088C101.44 7.19467 102.283 7.38667 103.136 7.664C104.011 7.94133 104.725 8.368 105.28 8.944C105.835 9.52 106.144 10.2027 106.208 10.992C106.229 11.312 106.101 11.5573 105.824 11.728C105.568 11.8773 105.269 11.952 104.928 11.952C104.608 11.952 104.363 11.8773 104.192 11.728C104.043 11.5573 103.893 11.312 103.744 10.992C102.933 9.34933 101.163 8.528 98.432 8.528C96.576 8.528 95.0507 8.92267 93.856 9.712C92.6827 10.5013 92.096 11.6533 92.096 13.168C92.096 14.0213 92.3627 14.7573 92.896 15.376C93.4293 15.9733 94.1227 16.4427 94.976 16.784C95.8507 17.1253 96.8 17.4347 97.824 17.712C98.8693 17.9893 99.904 18.2987 100.928 18.64C101.973 18.9813 102.923 19.3867 103.776 19.856C104.651 20.3253 105.355 20.9867 105.888 21.84C106.421 22.672 106.688 23.6747 106.688 24.848C106.688 26.5547 105.845 28.0053 104.16 29.2C102.496 30.3947 100.395 30.992 97.856 30.992C95.8933 30.992 93.9733 30.576 92.096 29.744C90.2187 28.912 89.28 28.0587 89.28 27.184C89.28 26.9493 89.4187 26.736 89.696 26.544C89.9733 26.3307 90.24 26.224 90.496 26.224C90.7733 26.224 91.0293 26.3093 91.264 26.48C91.4987 26.6293 91.7653 26.8427 92.064 27.12C92.3627 27.3973 92.6293 27.6107 92.864 27.76C94.4853 28.784 96.2987 29.296 98.304 29.296C99.712 29.296 101.088 28.8693 102.432 28.016C103.776 27.1413 104.448 25.9787 104.448 24.528C104.448 23.5467 104.085 22.736 103.36 22.096C102.635 21.4347 101.728 20.9653 100.64 20.688C99.552 20.3893 98.368 20.0587 97.088 19.696C95.8293 19.3333 94.656 18.96 93.568 18.576C92.48 18.192 91.5733 17.5733 90.848 16.72C90.1227 15.8667 89.76 14.8533 89.76 13.68C89.76 12.4853 90.0053 11.4507 90.496 10.576C91.008 9.68 91.6693 8.976 92.48 8.464ZM111.583 23.504C111.54 23.9307 111.519 24.2187 111.519 24.368C111.519 25.648 111.903 26.64 112.671 27.344C113.46 28.048 114.388 28.4 115.455 28.4C116.521 28.4 117.385 28.2507 118.047 27.952C118.729 27.6533 119.22 27.3333 119.519 26.992C120.287 26.032 120.991 25.552 121.631 25.552C121.865 25.552 122.143 25.616 122.463 25.744C122.249 26.7893 121.439 27.7493 120.031 28.624C118.644 29.4773 116.895 29.904 114.783 29.904C113.289 29.904 111.999 29.4347 110.911 28.496C109.844 27.536 109.311 26.2347 109.311 24.592C109.311 22.9493 109.631 21.36 110.271 19.824C110.932 18.2667 111.871 16.944 113.087 15.856C114.324 14.7467 115.572 14.192 116.831 14.192C118.111 14.192 119.135 14.4587 119.903 14.992C120.692 15.504 121.087 16.2613 121.087 17.264C121.087 19.12 120.255 20.656 118.591 21.872C116.948 23.0667 115.199 23.664 113.343 23.664C112.852 23.664 112.265 23.6107 111.583 23.504ZM114.015 22.448C115.017 22.448 115.913 22.128 116.703 21.488C117.492 20.848 118.047 20.176 118.367 19.472C118.708 18.768 118.879 18.128 118.879 17.552C118.879 16.976 118.655 16.4747 118.207 16.048C117.759 15.6 117.236 15.376 116.639 15.376C115.572 15.376 114.58 16.112 113.663 17.584C112.767 19.056 112.127 20.5813 111.743 22.16C112.681 22.352 113.439 22.448 114.015 22.448ZM135.188 20.784L135.028 24.464C135.028 26.32 135.241 27.568 135.668 28.208C135.924 28.6347 136.276 28.848 136.724 28.848C136.852 28.848 137.033 28.816 137.268 28.752C137.716 28.624 138.089 28.688 138.388 28.944C138.238 29.6907 137.492 30.064 136.148 30.064C135.23 30.064 134.622 29.68 134.324 28.912C134.089 28.336 133.918 27.6213 133.812 26.768C133.705 25.8933 133.62 25.296 133.556 24.976C132.169 27.6213 130.825 29.232 129.524 29.808C128.862 30.1067 128.094 30.256 127.22 30.256C126.345 30.256 125.662 29.84 125.172 29.008C124.702 28.1547 124.468 26.9173 124.468 25.296C124.468 23.6747 124.734 21.9787 125.268 20.208C125.801 18.416 126.58 16.912 127.604 15.696C128.628 14.4587 129.748 13.84 130.964 13.84C132.713 13.84 133.876 14.5653 134.452 16.016C134.942 17.2533 135.188 18.8427 135.188 20.784ZM127.348 19.76C127.049 20.912 126.825 22.0107 126.676 23.056C126.526 24.08 126.452 24.9973 126.452 25.808C126.452 26.5973 126.612 27.28 126.932 27.856C127.273 28.432 127.71 28.72 128.244 28.72C129.396 28.72 130.505 27.632 131.572 25.456C132.638 23.28 133.172 21.2533 133.172 19.376C133.172 18.16 132.852 17.1573 132.212 16.368C131.785 15.856 131.22 15.6 130.516 15.6C129.833 15.6 129.204 16.0053 128.628 16.816C128.073 17.6053 127.646 18.5867 127.348 19.76ZM142.587 26.864L142.683 28.688C142.683 29.1573 142.544 29.488 142.266 29.68C142.011 29.8507 141.744 29.936 141.467 29.936C141.211 29.936 140.944 29.8933 140.667 29.808C140.197 27.3333 139.835 24.2507 139.579 20.56C139.344 16.8693 139.205 14.7787 139.163 14.288C139.483 13.9893 139.813 13.84 140.155 13.84C140.517 13.84 140.837 13.8827 141.115 13.968C141.2 14.5867 141.264 15.952 141.307 18.064C141.349 20.176 141.403 21.4987 141.467 22.032C141.765 20.24 142.299 18.5653 143.067 17.008C143.493 16.1333 144.048 15.44 144.731 14.928C145.435 14.3947 146.181 14.128 146.97 14.128C147.781 14.128 148.517 14.4907 149.179 15.216C149.861 15.92 150.203 16.56 150.203 17.136C150.203 17.3493 150.075 17.52 149.819 17.648C149.563 17.7547 149.275 17.808 148.955 17.808C148.656 17.808 148.421 17.6907 148.251 17.456C148.08 17.2213 147.963 16.9653 147.899 16.688C147.835 16.3893 147.696 16.1227 147.483 15.888C147.269 15.6533 146.981 15.536 146.619 15.536C145.659 15.536 144.837 16.4 144.155 18.128C143.109 20.7093 142.587 23.6213 142.587 26.864ZM162.671 18C162.266 18.4053 161.861 18.608 161.455 18.608C161.05 18.608 160.719 18.4373 160.463 18.096C160.229 17.7333 160.037 17.3493 159.887 16.944C159.738 16.5173 159.461 16.1333 159.055 15.792C158.671 15.4293 158.181 15.248 157.583 15.248C156.751 15.3333 155.994 15.9307 155.311 17.04C154.629 18.128 154.127 19.3333 153.807 20.656C153.487 21.9787 153.327 23.2267 153.327 24.4C153.327 25.552 153.647 26.5547 154.287 27.408C154.949 28.24 155.834 28.656 156.943 28.656C158.223 28.656 159.247 28.208 160.015 27.312C160.335 26.928 160.634 26.544 160.911 26.16C161.594 25.264 162.213 24.816 162.767 24.816C162.959 24.816 163.237 24.8693 163.599 24.976C163.599 25.7653 162.874 26.8107 161.423 28.112C159.994 29.392 158.437 30.032 156.751 30.032C155.066 30.032 153.733 29.4987 152.751 28.432C151.791 27.344 151.311 25.9467 151.311 24.24C151.311 22.0427 151.845 19.8453 152.911 17.648C153.445 16.5813 154.17 15.7067 155.087 15.024C156.005 14.32 157.029 13.968 158.159 13.968C159.29 13.968 160.197 14.352 160.879 15.12C161.583 15.8667 162.181 16.8267 162.671 18ZM166.393 23.376L166.681 9.04C166.681 7.93067 166.617 7.17333 166.489 6.768C166.873 6.42667 167.459 6.256 168.249 6.256C168.569 8.53867 168.729 11.472 168.729 15.056C168.729 16.1227 168.633 18.5973 168.441 22.48C169.443 17.0827 171.235 14.384 173.817 14.384C174.734 14.384 175.438 14.8747 175.929 15.856C176.441 16.816 176.761 17.9893 176.889 19.376C177.017 20.7627 177.123 22.1493 177.209 23.536C177.422 26.864 178.019 28.528 179.001 28.528C179.022 28.528 179.225 28.464 179.609 28.336C180.462 28.08 180.942 28.016 181.049 28.144C181.049 28.3787 180.718 28.6773 180.057 29.04C179.395 29.3813 178.787 29.552 178.233 29.552C177.294 29.552 176.569 29.072 176.057 28.112C175.566 27.1307 175.257 25.9467 175.129 24.56C175.022 23.1733 174.937 21.7973 174.873 20.432C174.83 19.0453 174.691 17.872 174.457 16.912C174.222 15.9307 173.827 15.44 173.273 15.44C172.59 15.44 171.961 16.1867 171.385 17.68C170.83 19.152 170.393 20.784 170.073 22.576C169.753 24.368 169.358 26.0107 168.889 27.504C168.441 28.976 167.982 29.712 167.513 29.712C166.766 29.712 166.393 27.6 166.393 23.376ZM97.536 59.56C97.536 58.024 98.0267 57.256 99.008 57.256C99.2 57.256 99.392 57.2773 99.584 57.32C99.584 57.576 99.584 58.2693 99.584 59.4C99.584 60.5307 99.7333 62.792 100.032 66.184C100.331 69.576 100.48 72.1147 100.48 73.8C100.48 76.488 100.011 78.344 99.072 79.368C98.1333 80.392 96.5333 80.904 94.272 80.904C92.032 80.904 89.92 80.1787 87.936 78.728C88.32 78.2587 88.8213 78.024 89.44 78.024C89.6747 78.0453 90.048 78.2053 90.56 78.504C92.0747 79.4 93.3333 79.848 94.336 79.848C95.8293 79.848 96.8853 79.3787 97.504 78.44C98.1227 77.5013 98.432 75.9227 98.432 73.704C98.432 73.1707 98.3787 71.2507 98.272 67.944C98.2507 68.008 98.176 68.2853 98.048 68.776C97.92 69.2453 97.824 69.5547 97.76 69.704C97.696 69.8533 97.5787 70.1307 97.408 70.536C97.2587 70.9413 97.0987 71.2293 96.928 71.4C96.7573 71.5707 96.5333 71.7733 96.256 72.008C95.7867 72.4347 95.1893 72.648 94.464 72.648C93.76 72.648 93.1947 72.552 92.768 72.36C92.3413 72.168 91.9787 71.8693 91.68 71.464C91.4027 71.0587 91.1467 70.632 90.912 70.184C90.6987 69.736 90.528 69.1707 90.4 68.488C90.272 67.784 90.1653 67.144 90.08 66.568C90.016 65.992 89.9627 65.288 89.92 64.456C89.8987 63.624 89.8773 62.9307 89.856 62.376C89.856 61.8213 89.856 61.1173 89.856 60.264V58.344C90.0693 57.9813 90.4533 57.8 91.008 57.8C91.776 57.8 92.16 58.0773 92.16 58.632L91.968 61.736C91.968 64.4453 92.256 66.7813 92.832 68.744C93.408 70.7067 94.0053 71.688 94.624 71.688C95.0933 71.688 95.5093 71.432 95.872 70.92C96.2347 70.408 96.512 69.6933 96.704 68.776C96.896 67.8373 97.056 66.952 97.184 66.12C97.312 65.288 97.3973 64.3173 97.44 63.208C97.504 61.5227 97.536 60.3067 97.536 59.56ZM105.132 59.72C106.22 58.056 107.788 57.224 109.836 57.224C111.884 57.224 113.516 58.056 114.732 59.72C115.97 61.384 116.588 63.2827 116.588 65.416C116.588 67.528 115.916 69.32 114.572 70.792C113.228 72.264 111.522 73 109.452 73C107.383 73 105.879 72.424 104.94 71.272C104.002 70.0987 103.532 68.456 103.532 66.344C103.532 63.592 104.066 61.384 105.132 59.72ZM106.54 61.416C106.263 62.248 106.05 63.08 105.9 63.912C105.772 64.744 105.708 65.5227 105.708 66.248C105.708 66.952 105.762 67.6027 105.868 68.2C105.975 68.776 106.156 69.352 106.412 69.928C106.668 70.4827 107.052 70.9307 107.564 71.272C108.076 71.592 108.684 71.752 109.388 71.752C110.818 71.752 112.012 71.1653 112.972 69.992C113.954 68.8187 114.444 67.4 114.444 65.736C114.444 64.072 113.996 62.4613 113.1 60.904C112.226 59.3253 111.148 58.536 109.868 58.536C109.1 58.536 108.428 58.8027 107.852 59.336C107.276 59.8693 106.839 60.5627 106.54 61.416ZM122.356 57.992C121.801 59.0373 121.524 60.5947 121.524 62.664C121.524 65.7787 122.11 68.264 123.284 70.12C123.966 71.208 124.777 71.752 125.716 71.752C126.676 71.752 127.444 71.2507 128.02 70.248C128.702 69.0107 129.044 67.304 129.044 65.128C129.044 62.3973 128.66 60.3813 127.892 59.08C127.55 58.4613 127.348 58.0133 127.284 57.736C127.241 57.4587 127.316 57.256 127.508 57.128C127.7 57 128.02 56.936 128.468 56.936C129.769 56.936 130.622 58.28 131.028 60.968C131.156 61.7147 131.22 62.4613 131.22 63.208C131.22 65.1493 130.836 67.0907 130.068 69.032C128.98 71.6987 127.262 73.032 124.916 73.032C123.678 73.032 122.622 72.5733 121.748 71.656C120.105 69.9067 119.284 67.272 119.284 63.752C119.284 62.216 119.39 61.0427 119.604 60.232C119.817 59.4213 119.998 58.8987 120.148 58.664C120.297 58.408 120.478 58.1733 120.692 57.96C120.905 57.7467 121.14 57.6613 121.396 57.704C121.673 57.7467 121.993 57.8427 122.356 57.992ZM137.524 69.864L137.62 71.688C137.62 72.1573 137.481 72.488 137.204 72.68C136.948 72.8507 136.681 72.936 136.404 72.936C136.148 72.936 135.881 72.8933 135.604 72.808C135.135 70.3333 134.772 67.2507 134.516 63.56C134.281 59.8693 134.143 57.7787 134.1 57.288C134.42 56.9893 134.751 56.84 135.092 56.84C135.455 56.84 135.775 56.8827 136.052 56.968C136.137 57.5867 136.201 58.952 136.244 61.064C136.287 63.176 136.34 64.4987 136.404 65.032C136.703 63.24 137.236 61.5653 138.004 60.008C138.431 59.1333 138.985 58.44 139.668 57.928C140.372 57.3947 141.119 57.128 141.908 57.128C142.719 57.128 143.455 57.4907 144.116 58.216C144.799 58.92 145.14 59.56 145.14 60.136C145.14 60.3493 145.012 60.52 144.756 60.648C144.5 60.7547 144.212 60.808 143.892 60.808C143.593 60.808 143.359 60.6907 143.188 60.456C143.017 60.2213 142.9 59.9653 142.836 59.688C142.772 59.3893 142.633 59.1227 142.42 58.888C142.207 58.6533 141.919 58.536 141.556 58.536C140.596 58.536 139.775 59.4 139.092 61.128C138.047 63.7093 137.524 66.6213 137.524 69.864ZM154.389 59.592C153.429 59.592 152.778 59.3573 152.437 58.888C152.437 58.5467 152.575 58.28 152.853 58.088C153.151 57.896 153.471 57.7787 153.813 57.736C154.154 57.672 154.709 57.6187 155.477 57.576C155.541 57 155.573 56.264 155.573 55.368C155.594 54.4507 155.615 53.672 155.637 53.032C155.701 51.3467 155.957 50.312 156.405 49.928C156.597 49.7573 156.799 49.672 157.013 49.672C157.247 49.672 157.45 49.6933 157.621 49.736C157.685 51.272 157.717 52.2 157.717 52.52L157.525 57.32C157.567 57.3413 157.685 57.352 157.877 57.352L160.181 57.256C161.845 57.256 162.677 57.512 162.677 58.024C162.677 58.7493 162.378 59.176 161.781 59.304C161.503 59.368 161.173 59.4 160.789 59.4C160.426 59.4 159.946 59.3573 159.349 59.272C158.773 59.1653 158.357 59.112 158.101 59.112C157.845 59.112 157.674 59.1227 157.589 59.144C157.525 59.7627 157.493 60.3813 157.493 61C157.493 61.5973 157.503 62.3547 157.525 63.272C157.567 64.168 157.653 65.2453 157.781 66.504C157.93 67.7627 158.239 68.8507 158.709 69.768C159.178 70.664 159.775 71.112 160.501 71.112C160.863 71.112 161.29 70.9733 161.781 70.696C162.271 70.3973 162.645 70.248 162.901 70.248C163.178 70.248 163.413 70.312 163.605 70.44C163.818 70.5467 163.925 70.6747 163.925 70.824C163.925 71.272 163.466 71.7093 162.549 72.136C161.653 72.5413 160.885 72.744 160.245 72.744C157.898 72.744 156.437 70.5253 155.861 66.088C155.69 64.808 155.562 62.6107 155.477 59.496C155.135 59.56 154.773 59.592 154.389 59.592ZM168.962 69.864L169.058 71.688C169.058 72.1573 168.919 72.488 168.641 72.68C168.386 72.8507 168.119 72.936 167.842 72.936C167.586 72.936 167.319 72.8933 167.042 72.808C166.572 70.3333 166.21 67.2507 165.954 63.56C165.719 59.8693 165.58 57.7787 165.538 57.288C165.858 56.9893 166.188 56.84 166.53 56.84C166.892 56.84 167.212 56.8827 167.49 56.968C167.575 57.5867 167.639 58.952 167.682 61.064C167.724 63.176 167.778 64.4987 167.842 65.032C168.14 63.24 168.674 61.5653 169.442 60.008C169.868 59.1333 170.423 58.44 171.106 57.928C171.81 57.3947 172.556 57.128 173.345 57.128C174.156 57.128 174.892 57.4907 175.554 58.216C176.236 58.92 176.578 59.56 176.578 60.136C176.578 60.3493 176.45 60.52 176.194 60.648C175.938 60.7547 175.65 60.808 175.33 60.808C175.031 60.808 174.796 60.6907 174.626 60.456C174.455 60.2213 174.338 59.9653 174.274 59.688C174.21 59.3893 174.071 59.1227 173.858 58.888C173.644 58.6533 173.356 58.536 172.994 58.536C172.034 58.536 171.212 59.4 170.53 61.128C169.484 63.7093 168.962 66.6213 168.962 69.864ZM179.676 66.504C179.634 66.9307 179.612 67.2187 179.612 67.368C179.612 68.648 179.996 69.64 180.764 70.344C181.554 71.048 182.482 71.4 183.548 71.4C184.615 71.4 185.479 71.2507 186.14 70.952C186.823 70.6533 187.314 70.3333 187.612 69.992C188.38 69.032 189.084 68.552 189.724 68.552C189.959 68.552 190.236 68.616 190.556 68.744C190.343 69.7893 189.532 70.7493 188.124 71.624C186.738 72.4773 184.988 72.904 182.876 72.904C181.383 72.904 180.092 72.4347 179.004 71.496C177.938 70.536 177.404 69.2347 177.404 67.592C177.404 65.9493 177.724 64.36 178.364 62.824C179.026 61.2667 179.964 59.944 181.18 58.856C182.418 57.7467 183.666 57.192 184.924 57.192C186.204 57.192 187.228 57.4587 187.996 57.992C188.786 58.504 189.18 59.2613 189.18 60.264C189.18 62.12 188.348 63.656 186.684 64.872C185.042 66.0667 183.292 66.664 181.436 66.664C180.946 66.664 180.359 66.6107 179.676 66.504ZM182.108 65.448C183.111 65.448 184.007 65.128 184.796 64.488C185.586 63.848 186.14 63.176 186.46 62.472C186.802 61.768 186.972 61.128 186.972 60.552C186.972 59.976 186.748 59.4747 186.3 59.048C185.852 58.6 185.33 58.376 184.732 58.376C183.666 58.376 182.674 59.112 181.756 60.584C180.86 62.056 180.22 63.5813 179.836 65.16C180.775 65.352 181.532 65.448 182.108 65.448ZM194.801 66.504C194.759 66.9307 194.737 67.2187 194.737 67.368C194.737 68.648 195.121 69.64 195.889 70.344C196.679 71.048 197.607 71.4 198.673 71.4C199.74 71.4 200.604 71.2507 201.265 70.952C201.948 70.6533 202.439 70.3333 202.737 69.992C203.505 69.032 204.209 68.552 204.849 68.552C205.084 68.552 205.361 68.616 205.681 68.744C205.468 69.7893 204.657 70.7493 203.249 71.624C201.863 72.4773 200.113 72.904 198.001 72.904C196.508 72.904 195.217 72.4347 194.129 71.496C193.063 70.536 192.529 69.2347 192.529 67.592C192.529 65.9493 192.849 64.36 193.489 62.824C194.151 61.2667 195.089 59.944 196.305 58.856C197.543 57.7467 198.791 57.192 200.049 57.192C201.329 57.192 202.353 57.4587 203.121 57.992C203.911 58.504 204.305 59.2613 204.305 60.264C204.305 62.12 203.473 63.656 201.809 64.872C200.167 66.0667 198.417 66.664 196.561 66.664C196.071 66.664 195.484 66.6107 194.801 66.504ZM197.233 65.448C198.236 65.448 199.132 65.128 199.921 64.488C200.711 63.848 201.265 63.176 201.585 62.472C201.927 61.768 202.097 61.128 202.097 60.552C202.097 59.976 201.873 59.4747 201.425 59.048C200.977 58.6 200.455 58.376 199.857 58.376C198.791 58.376 197.799 59.112 196.881 60.584C195.985 62.056 195.345 63.5813 194.961 65.16C195.9 65.352 196.657 65.448 197.233 65.448Z" fill="#CCCCCC"/>
                </svg>                    
            </div>
            <form method="POST">
                @csrf;
                <div class="search">
                    <input type="text" name="q" id="search">
                    <button type="submit" id="search-btn">
                        <svg width="29" height="23" viewBox="0 0 39 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M25.6333 13.1556C25.6333 19.5496 20.2747 24.8111 13.5667 24.8111C6.85859 24.8111 1.5 19.5496 1.5 13.1556C1.5 6.76154 6.85859 1.5 13.5667 1.5C20.2747 1.5 25.6333 6.76154 25.6333 13.1556Z" stroke="#B8EDD3" stroke-width="3"/>
                            <line x1="23.9334" y1="21.0085" x2="37.9112" y2="31.6973" stroke="#B8EDD3" stroke-width="3"/>
                        </svg>                        
                     </button>
            </div>
            </form>
            <div class="svg-arrow-2">
                <svg width="328" height="200" viewBox="0 0 328 145" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="path-2" d="M225 1C210 76 159.217 63.1447 101 44.5C24.5 20 7.50005 105.833 33 140" stroke="#80BEA0" stroke-width="5"/>
                    <path class="path-arrow-2" d="M3 113.962C9.62394 117.839 18.0031 125.131 21.9134 132.299C23.5451 135.291 26.8741 136.94 28.5059 139.877C29.369 141.431 30.2036 146.944 31.84 143.969C35.8195 136.734 39.4007 129.279 44.4188 122.828C47.8055 118.473 49.8013 117.244 54.7243 113.962" stroke="#80BEA0" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M208.216 58.472C208.003 68.1147 207.885 75.6453 207.864 81.064C207.544 81.4053 207.256 81.576 207 81.576C206.765 81.576 206.563 81.5227 206.392 81.416C205.901 81.096 205.656 80.4987 205.656 79.624C205.699 69.3627 205.773 63.3573 205.88 61.608C205.987 59.8587 206.147 58.8453 206.36 58.568C206.573 58.2907 206.829 58.152 207.128 58.152C207.427 58.152 207.789 58.2587 208.216 58.472ZM225.603 80.104C225.219 80.5093 224.781 80.712 224.291 80.712C223.373 80.712 222.691 80.2213 222.243 79.24C221.795 78.2587 221.528 77.064 221.443 75.656C221.379 74.248 221.336 72.84 221.315 71.432C221.293 70.024 221.176 68.8293 220.963 67.848C220.771 66.8667 220.397 66.376 219.843 66.376C219.096 66.376 218.456 67.048 217.923 68.392C217.411 69.736 217.048 71.2293 216.835 72.872C216.237 77.4587 215.661 80.0293 215.107 80.584C214.723 80.776 214.392 80.872 214.115 80.872C213.837 80.872 213.603 80.84 213.411 80.776C212.963 78.8133 212.675 75.432 212.547 70.632C212.504 68.2427 212.461 66.696 212.419 65.992C212.867 65.6933 213.251 65.544 213.571 65.544C213.891 65.544 214.147 65.576 214.339 65.64C214.445 66.5573 214.499 68.4347 214.499 71.272C214.52 74.1093 214.541 75.7413 214.562 76.168C214.669 75.72 214.797 74.9947 214.947 73.992C215.117 72.9893 215.267 72.168 215.395 71.528C215.523 70.8667 215.725 70.0987 216.003 69.224C216.28 68.3493 216.589 67.656 216.931 67.144C217.272 66.6107 217.741 66.1627 218.339 65.8C218.936 65.416 219.608 65.224 220.355 65.224C221.357 65.224 222.083 65.6827 222.531 66.6C223 67.496 223.256 68.616 223.299 69.96C223.341 71.304 223.363 72.6693 223.363 74.056C223.384 75.4427 223.555 76.712 223.875 77.864C224.216 79.016 224.792 79.7627 225.603 80.104ZM229.659 71.464L235.803 71.688C237.211 71.688 238.214 71.6347 238.811 71.528C239.43 71.4 239.803 71.336 239.931 71.336C240.593 71.336 240.923 71.5067 240.923 71.848C240.923 72.3173 240.55 72.68 239.803 72.936C239.078 73.192 238.225 73.3413 237.243 73.384C236.283 73.4053 235.526 73.416 234.971 73.416C234.417 73.416 233.777 73.416 233.051 73.416C232.347 73.3947 231.451 73.352 230.363 73.288C229.275 73.2027 228.646 73.16 228.475 73.16C227.878 73.16 227.579 73.0427 227.579 72.808C227.579 72.4453 227.974 72.0827 228.763 71.72C229.126 71.5493 229.425 71.464 229.659 71.464ZM251.417 81.192L248.761 81.288C247.267 81.288 246.297 81.0853 245.849 80.68C245.571 80.4667 245.433 80.168 245.433 79.784C245.433 77.3733 245.518 74.216 245.689 70.312C245.859 66.3867 245.945 63.336 245.945 61.16C245.945 60.2853 246.755 59.5813 248.377 59.048C249.998 58.5147 251.737 58.248 253.593 58.248C257.07 58.248 259.95 59.2293 262.233 61.192C264.537 63.1547 265.689 65.704 265.689 68.84C265.689 70.4187 265.411 71.88 264.857 73.224C264.323 74.568 263.598 75.7307 262.681 76.712C261.763 77.672 260.697 78.4933 259.481 79.176C257.049 80.52 254.361 81.192 251.417 81.192ZM263.417 69.608C263.417 66.856 262.478 64.552 260.601 62.696C258.745 60.8187 256.334 59.88 253.369 59.88C251.918 59.88 250.19 60.36 248.185 61.32C248.185 63.048 248.099 65.64 247.929 69.096C247.758 72.5307 247.673 74.9093 247.673 76.232C247.673 77.5333 247.683 78.4613 247.705 79.016C248.899 79.2507 250.179 79.368 251.545 79.368C255.001 79.368 257.838 78.5253 260.057 76.84C262.297 75.1547 263.417 72.744 263.417 69.608ZM270.426 74.504C270.384 74.9307 270.362 75.2187 270.362 75.368C270.362 76.648 270.746 77.64 271.514 78.344C272.304 79.048 273.232 79.4 274.298 79.4C275.365 79.4 276.229 79.2507 276.89 78.952C277.573 78.6533 278.064 78.3333 278.362 77.992C279.13 77.032 279.834 76.552 280.474 76.552C280.709 76.552 280.986 76.616 281.306 76.744C281.093 77.7893 280.282 78.7493 278.874 79.624C277.488 80.4773 275.738 80.904 273.626 80.904C272.133 80.904 270.842 80.4347 269.754 79.496C268.688 78.536 268.154 77.2347 268.154 75.592C268.154 73.9493 268.474 72.36 269.114 70.824C269.776 69.2667 270.714 67.944 271.93 66.856C273.168 65.7467 274.416 65.192 275.674 65.192C276.954 65.192 277.978 65.4587 278.746 65.992C279.536 66.504 279.93 67.2613 279.93 68.264C279.93 70.12 279.098 71.656 277.434 72.872C275.792 74.0667 274.042 74.664 272.186 74.664C271.696 74.664 271.109 74.6107 270.426 74.504ZM272.858 73.448C273.861 73.448 274.757 73.128 275.546 72.488C276.336 71.848 276.89 71.176 277.21 70.472C277.552 69.768 277.722 69.128 277.722 68.552C277.722 67.976 277.498 67.4747 277.05 67.048C276.602 66.6 276.08 66.376 275.482 66.376C274.416 66.376 273.424 67.112 272.506 68.584C271.61 70.056 270.97 71.5813 270.586 73.16C271.525 73.352 272.282 73.448 272.858 73.448ZM283.951 67.592C282.991 67.592 282.341 67.3573 281.999 66.888C281.999 66.5467 282.138 66.28 282.415 66.088C282.714 65.896 283.034 65.7787 283.375 65.736C283.717 65.672 284.271 65.6187 285.039 65.576C285.103 65 285.135 64.264 285.135 63.368C285.157 62.4507 285.178 61.672 285.199 61.032C285.263 59.3467 285.519 58.312 285.967 57.928C286.159 57.7573 286.362 57.672 286.575 57.672C286.81 57.672 287.013 57.6933 287.183 57.736C287.247 59.272 287.279 60.2 287.279 60.52L287.087 65.32C287.13 65.3413 287.247 65.352 287.439 65.352L289.743 65.256C291.407 65.256 292.239 65.512 292.239 66.024C292.239 66.7493 291.941 67.176 291.343 67.304C291.066 67.368 290.735 67.4 290.351 67.4C289.989 67.4 289.509 67.3573 288.911 67.272C288.335 67.1653 287.919 67.112 287.663 67.112C287.407 67.112 287.237 67.1227 287.151 67.144C287.087 67.7627 287.055 68.3813 287.055 69C287.055 69.5973 287.066 70.3547 287.087 71.272C287.13 72.168 287.215 73.2453 287.343 74.504C287.493 75.7627 287.802 76.8507 288.271 77.768C288.741 78.664 289.338 79.112 290.063 79.112C290.426 79.112 290.853 78.9733 291.343 78.696C291.834 78.3973 292.207 78.248 292.463 78.248C292.741 78.248 292.975 78.312 293.167 78.44C293.381 78.5467 293.487 78.6747 293.487 78.824C293.487 79.272 293.029 79.7093 292.111 80.136C291.215 80.5413 290.447 80.744 289.807 80.744C287.461 80.744 285.999 78.5253 285.423 74.088C285.253 72.808 285.125 70.6107 285.039 67.496C284.698 67.56 284.335 67.592 283.951 67.592ZM305.5 71.784L305.34 75.464C305.34 77.32 305.553 78.568 305.98 79.208C306.236 79.6347 306.588 79.848 307.036 79.848C307.164 79.848 307.345 79.816 307.58 79.752C308.028 79.624 308.401 79.688 308.7 79.944C308.551 80.6907 307.804 81.064 306.46 81.064C305.543 81.064 304.935 80.68 304.636 79.912C304.401 79.336 304.231 78.6213 304.124 77.768C304.017 76.8933 303.932 76.296 303.868 75.976C302.481 78.6213 301.137 80.232 299.836 80.808C299.175 81.1067 298.407 81.256 297.532 81.256C296.657 81.256 295.975 80.84 295.484 80.008C295.015 79.1547 294.78 77.9173 294.78 76.296C294.78 74.6747 295.047 72.9787 295.58 71.208C296.113 69.416 296.892 67.912 297.916 66.696C298.94 65.4587 300.06 64.84 301.276 64.84C303.025 64.84 304.188 65.5653 304.764 67.016C305.255 68.2533 305.5 69.8427 305.5 71.784ZM297.66 70.76C297.361 71.912 297.137 73.0107 296.988 74.056C296.839 75.08 296.764 75.9973 296.764 76.808C296.764 77.5973 296.924 78.28 297.244 78.856C297.585 79.432 298.023 79.72 298.556 79.72C299.708 79.72 300.817 78.632 301.884 76.456C302.951 74.28 303.484 72.2533 303.484 70.376C303.484 69.16 303.164 68.1573 302.524 67.368C302.097 66.856 301.532 66.6 300.828 66.6C300.145 66.6 299.516 67.0053 298.94 67.816C298.385 68.6053 297.959 69.5867 297.66 70.76ZM312.035 57.448C312.014 57.9387 312.003 58.4827 312.003 59.08C312.003 59.6773 312.035 60.296 312.099 60.936C311.8 61.2773 311.395 61.448 310.883 61.448C310.243 61.448 309.923 60.936 309.923 59.912C309.923 59.8693 309.923 59.7093 309.923 59.432C309.923 59.1547 309.923 58.9093 309.923 58.696C309.944 58.4613 309.987 58.1947 310.051 57.896C310.2 57.384 310.531 57.128 311.043 57.128C311.555 57.128 311.886 57.2347 312.035 57.448ZM309.987 73.128C309.987 68.9467 310.2 66.536 310.627 65.896C310.776 65.6613 310.958 65.544 311.171 65.544C311.384 65.544 311.736 65.6613 312.227 65.896C312.12 67.7093 312.067 69.6827 312.067 71.816C312.067 71.816 312.088 74.1733 312.131 78.888C312.131 79.5493 311.982 80.0187 311.683 80.296C311.406 80.552 311.139 80.68 310.883 80.68C310.648 80.68 310.403 80.616 310.147 80.488C310.04 77.7147 309.987 75.2613 309.987 73.128ZM317.225 61.864C317.225 59.752 316.937 58.3333 316.361 57.608C316.639 57.2027 317.119 57 317.801 57C317.929 57 318.068 57.0107 318.217 57.032C318.751 57.5653 319.017 59.112 319.017 61.672C319.017 63.0587 318.953 64.6693 318.825 66.504C318.569 69.704 318.441 72.0507 318.441 73.544C318.441 77.576 319.22 79.592 320.777 79.592C320.777 79.592 321.172 79.5173 321.961 79.368C322.153 79.368 322.313 79.4533 322.441 79.624C322.377 80.392 321.748 80.776 320.553 80.776C319.38 80.776 318.473 80.424 317.833 79.72C317.193 78.9947 316.788 78.0987 316.617 77.032C316.468 75.944 316.393 75.048 316.393 74.344C316.393 73.64 316.404 72.872 316.425 72.04C316.447 71.1867 316.543 69.9707 316.713 68.392C317.055 65.192 317.225 63.016 317.225 61.864Z" fill="#CCCCCC"/>
                </svg>                    
            </div>
        </div>
   </div>

   <div class="content-container">
            @if( !isset($q) || empty($q) )
                <div class="info">
                    <p>
                        Here are some tree you can read about.
                        <br>
                        or
                        <br> 
                        You could search your own tree using the search bar above
                        :)
                        <br>
                        <br>
                        <i>( "The detailed data may not be available as it fetched <br> from trefle api. <br> Trefel.io is still in alpha stage" )</i>
                    </p>
                </div>
            @endif
        <h3> Scientific Names </h3>
        <!-- <div class="container"> 
            <div class="title">
                Tree Name
            </div>
            <div class="button">
                <a href="#">
                    <button> View More </button>
                </a>
            </div>
        </div> -->
        @foreach( $content as $item )
            <!-- $item = (array) $item; -->
            @foreach( $item as $key=>$value )
                @if( $key == "id" )
                  <?php  $_GLOBALS['id'] = $value; ?>
                @endif
                @if( $key == "scientific_name" )
                  <?php  $_GLOBALS['name'] = $value; ?>
                @endif
            @endforeach    
            <div class="container">
                <div class="title">
                    <?php echo $_GLOBALS['name']; ?>
                </div>
                <div class="button">
                    <a href="/detail/<?php echo $_GLOBALS['id'];?>">
                        <button> View More </button>
                    </a>
                </div>
            </div>
        @endforeach
   </div>
    
   <div class="footer">
       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure adipisci ab voluptatum inventore! Labore doloremque 
       <br> 
       voluptas necessitatibus corrupti dolorum aspernatur, architecto quibusdam nihil ratione, tempora quam minima, aliquid quidem qui.</p>
   </div>

@endsection