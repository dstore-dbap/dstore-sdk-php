<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetShippingCost_Pu.proto

namespace GPBMetadata\Dstore\Engine\Procedures;

class OmGetShippingCostPu
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Dstore\Values::initOnce();
        \GPBMetadata\Dstore\Engine\Engine::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aee0d0a346473746f72652f656e67696e652f70726f636564757265732f" .
            "6f6d5f4765745368697070696e67436f73745f50752e70726f746f122364" .
            "73746f72652e656e67696e652e6f6d5f4765745368697070696e67436f73" .
            "745f50751a136473746f72652f76616c7565732e70726f746f1a1a647374" .
            "6f72652f656e67696e652f656e67696e652e70726f746f22d6080a0a5061" .
            "72616d657465727312350a107368697070696e675f747970655f69641801" .
            "2001280b321b2e6473746f72652e76616c7565732e496e74656765725661" .
            "6c7565121e0a157368697070696e675f747970655f69645f6e756c6c18e9" .
            "072001280812300a0b63757272656e63795f696418022001280b321b2e64" .
            "73746f72652e76616c7565732e496e746567657256616c756512190a1063" .
            "757272656e63795f69645f6e756c6c18ea072001280812370a12746f7461" .
            "6c5f62727574746f5f707269636518032001280b321b2e6473746f72652e" .
            "76616c7565732e446563696d616c56616c756512200a17746f74616c5f62" .
            "727574746f5f70726963655f6e756c6c18eb072001280812360a11746f74" .
            "616c5f6e6574746f5f707269636518042001280b321b2e6473746f72652e" .
            "76616c7565732e446563696d616c56616c7565121f0a16746f74616c5f6e" .
            "6574746f5f70726963655f6e756c6c18ec072001280812320a0d73686970" .
            "70696e675f636f737418052001280b321b2e6473746f72652e76616c7565" .
            "732e446563696d616c56616c7565121b0a127368697070696e675f636f73" .
            "745f6e756c6c18ed072001280812390a147368697070696e675f636f7374" .
            "5f62727574746f18062001280b321b2e6473746f72652e76616c7565732e" .
            "446563696d616c56616c756512220a197368697070696e675f636f73745f" .
            "62727574746f5f6e756c6c18ee072001280812320a0d73656c6563745f72" .
            "6573756c7418072001280b321b2e6473746f72652e76616c7565732e426f" .
            "6f6c65616e56616c7565121b0a1273656c6563745f726573756c745f6e75" .
            "6c6c18ef0720012808122b0a046461746518082001280b321d2e6473746f" .
            "72652e76616c7565732e54696d657374616d7056616c756512120a096461" .
            "74655f6e756c6c18f00720012808122d0a09756e697175655f6964180920" .
            "01280b321a2e6473746f72652e76616c7565732e537472696e6756616c75" .
            "6512170a0e756e697175655f69645f6e756c6c18f10720012808122e0a09" .
            "706572736f6e5f6964180a2001280b321b2e6473746f72652e76616c7565" .
            "732e496e746567657256616c756512170a0e706572736f6e5f69645f6e75" .
            "6c6c18f2072001280812370a1264656c69766572795f706572736f6e5f69" .
            "64180b2001280b321b2e6473746f72652e76616c7565732e496e74656765" .
            "7256616c756512200a1764656c69766572795f706572736f6e5f69645f6e" .
            "756c6c18f3072001280812410a1c70726963655f6e6f64655f6368617261" .
            "6374657269737469635f6964180c2001280b321b2e6473746f72652e7661" .
            "6c7565732e496e746567657256616c7565122a0a2170726963655f6e6f64" .
            "655f63686172616374657269737469635f69645f6e756c6c18f407200128" .
            "0812340a0f7061796d656e745f747970655f6964180d2001280b321b2e64" .
            "73746f72652e76616c7565732e496e746567657256616c7565121d0a1470" .
            "61796d656e745f747970655f69645f6e756c6c18f5072001280822a6030a" .
            "08526573706f6e736512380a106d6574615f696e666f726d6174696f6e18" .
            "022003280b321e2e6473746f72652e656e67696e652e4d657461496e666f" .
            "726d6174696f6e12270a076d65737361676518032003280b32162e647374" .
            "6f72652e656e67696e652e4d657373616765123e0a03726f771804200328" .
            "0b32312e6473746f72652e656e67696e652e6f6d5f476574536869707069" .
            "6e67436f73745f50752e526573706f6e73652e526f7712320a0d73686970" .
            "70696e675f636f737418652001280b321b2e6473746f72652e76616c7565" .
            "732e446563696d616c56616c756512390a147368697070696e675f636f73" .
            "745f62727574746f18662001280b321b2e6473746f72652e76616c756573" .
            "2e446563696d616c56616c75651a87010a03526f77120f0a06726f775f69" .
            "6418904e2001280512330a0d7368697070696e675f636f737418914e2001" .
            "280b321b2e6473746f72652e76616c7565732e446563696d616c56616c75" .
            "65123a0a147368697070696e675f636f73745f62727574746f18924e2001" .
            "280b321b2e6473746f72652e76616c7565732e446563696d616c56616c75" .
            "6542560a1b696f2e6473746f72652e656e67696e652e70726f6365647572" .
            "65735a37676f73646b2e6473746f72652e64652f656e67696e652f70726f" .
            "636564757265732f6f6d5f4765745368697070696e67436f73745f507562" .
            "0670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

