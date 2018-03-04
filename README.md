# Kntnt's dates shortcode

Provides a shortcode for formated date and/or time.

## Description

The shortcode `[dates …]` with up to two arguments outputs date and/or time.

### Some examples

The shortcode `[dates]` outputs the time of the shortcode's execution formatted according to Settings » General.

The shortcode `[dates "l d M Y H:i"]` outputs time of the shortcode's execution formatted according to the format string.

The shortcode `[dates format="l d M Y H:i"]` is same as above.

The shortcode `[dates "l d M Y H:i" 123456]` outputs the date and time 123456 seconds after Unix Epoch formatted according to the format string.

The shortcode `[dates format="l d M Y H:i" timestamp="123456"]` is same as above.

### Detailed description

The first argument (`format`) takes a format string following he syntax described at http://php.net/manual/en/function.date.php. If not provided, the output is formatted with the date followed by the time where bth are formatted according to the date and time format under Settings » General.

The second argument (`timestamp`) is the time to output expressed as number of seconds since the Unix Epoch (January 1 1970 00:00:00 GMT). If not provided, the time of the shortcode's execution is used.

## Installation

Install the plugin [the usually way](https://codex.wordpress.org/Managing_Plugins#Installing_Plugins).

## Frequently Asked Questions

### Where is the setting page?

There is no setting page.

### How can I get help?

If you have a questions about the plugin, and cannot find an answer here, start by looking at [issues](https://github.com/Kntnt/kntnt-date-shortcode/issues) and [pull requests](https://github.com/Kntnt/kntnt-date-shortcode/pulls). If you still cannot find the answer, feel free to ask in the the plugin's [issue tracker](https://github.com/Kntnt/kntnt-date-shortcode/issues) at Github.

### How can I report a bug?

If you have found a potential bug, please report it on the plugin's [issue tracker](https://github.com/Kntnt/kntnt-date-shortcode/issues) at Github.

### How can I contribute?

Contributions to the code or documentation are much appreciated.

If you are unfamiliar with Git, please date it as a new issue on the plugin's [issue tracker](https://github.com/Kntnt/kntnt-date-shortcode/issues) at Github.

If you are familiar with Git, please do a pull request.

## Changelog

### 1.0.0

Initial release. Fully functional plugin.
