# Ethos automatic conf update (On Change)

These files allow you to update your configuration and reset your miners when you change the configuration.

  - Update your configuration in minutes.
  - No need to use Teamviewer or SSH.
  - It works with https://configmaker.com or server whit text.

### Installation
- Go to your RIG and copy *```autoupdate.sh```* and *```daemon_remote_conf.php```* in *```/home/ethos```*
- Add this line *```/home/ethos/autoupdate.sh```* in your *```custom.sh```* (Check in example folder).
- Modify the following lines with your remote file:
 ```sh
//YOUR REMOTE CONF URL
$your_config_url="https://configmaker.com/my/VirtualEarnestWhiteHagfish.txt";
//TIME TO CHECK - IN SECONDS
$time_check=5;
```
- Restart your ethOS RIG (with the command ```r```).
- Enjoy 😀


### daemon Usage
- You can manage the daemon with command *autoupdate.sh* `[start*|stop|restart]` *=default


License
----

Apache 2.0
**No comercial use**

### Please consider a donation for more projects like this

**BTC**: 1EEvGGLibsgdHUk2dbgMmHFPXvXrUyMQFc <br />
**ETH**: 0x957c8288e744efb225e87e77393f0d5b9a86df5d <br />
**TRX**: 0x957c8288e744efb225e87e77393f0d5b9a86df5d <br />
**NAV**: NatC1eBsrvXbUQD5R34TD2fg5J8hnFrmr5 <br />
**IOTA**: YBIZWEASKOZUJHXELQ9QCGDXRO9GPIHWWQZWMJHNZESKXHROCLAKVTGYPWDNHPSKRSGHSJG9HEIP9OXEDEZOYEZJZB
